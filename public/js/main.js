function toggleModal(modal, state) {
    modal.style.display = state ? 'flex' : 'none';
    // Отключаем или включаем прокрутку на body
    document.body.style.overflow = state ? 'hidden' : 'auto';
}

const modalLinks = document.querySelectorAll('.openModal');
const modal = document.getElementById('modal');
const modalTitle = document.getElementById('modalTitle');
const modalContent = document.getElementById('modalContent');
const closeBtn = document.querySelector('.close-btn');

modalLinks.forEach(link => {
    link.addEventListener('click', event => {
        event.preventDefault();
        const title = event.target.getAttribute('data-title');
        const content = event.target.getAttribute('data-content');
        modalTitle.textContent = title;
        modalContent.textContent = content;
        toggleModal(modal, true);
    });
});

if (closeBtn) {
    closeBtn.addEventListener('click', () => toggleModal(modal, false));
}

window.addEventListener('click', event => {
    if (event.target === modal) toggleModal(modal, false);
});

const modalLinks2 = document.querySelectorAll('.openModal2'); // Класс для второго модального окна
const modal2 = document.getElementById('modal2'); // Второе модальное окно
const modalTitle2 = document.getElementById('modalTitle2'); // Заголовок второго модального окна
const modalContent2 = document.getElementById('modalContent2'); // Контент второго модального окна
const modalImage = document.getElementById('modalImage'); // Изображение для второго модального окна
const closeBtn2 = document.querySelector('.close-btn2'); // Кнопка закрытия второго модального окна

modalLinks2.forEach(link => {
    link.addEventListener('click', event => {
        event.preventDefault();
        const title = link.getAttribute('data-title');
        const content = link.getAttribute('data-content');
        const image = link.getAttribute('data-image');

        modalTitle2.textContent = title;
        modalContent2.textContent = content;
        modalImage.src = image;
        toggleModal(modal2, true);
    });
});

if (closeBtn2) {
    closeBtn2.addEventListener('click', () => toggleModal(modal2, false));
}

window.addEventListener('click', event => {
    if (event.target === modal2) toggleModal(modal2, false);
});

// *** Работа с корзиной ***
const cartModal = document.getElementById('cartModal');
const cartItemsContainer = document.getElementById('cartItems');
const openCartButton = document.getElementById('openCart');
const closeCartButton = document.getElementById('closeCart');
const checkoutButton = document.getElementById('checkoutBtn');
const totalPriceElement = document.getElementById('totalPrice');
let cart = [];

if (openCartButton) {
    openCartButton.addEventListener('click', event => {
        event.preventDefault();
        toggleModal(cartModal, true);
        updateCartUI();
    });
}

if (closeCartButton) {
    closeCartButton.addEventListener('click', () => toggleModal(cartModal, false));
}

document.querySelectorAll('.card_btn').forEach(button => {
    button.addEventListener('click', event => {
        event.preventDefault();
        const product = {
            name: button.getAttribute('data-product'),
            price: parseFloat(button.getAttribute('data-price')),
            image: button.getAttribute('data-image'),
        };
        cart.push(product);
        showAddToCartNotification(`${product.name} добавлен в корзину`);
        updateCartUI();
    });
});

function updateCartUI() {
    cartItemsContainer.innerHTML = cart.length
        ? cart.map((item, index) => `
            <div class="cart-item">
                <img src="${item.image}" alt="${item.name}">
                <div class="product-name">${item.name}</div>
                <div class="product-price">${item.price} руб.</div>
                <button class="remove-item" data-index="${index}">Удалить</button>
            </div>
        `).join('')
        : '<p>В вашей корзине нет товаров.</p>';

    totalPriceElement.textContent = `${cart.reduce((sum, item) => sum + item.price, 0)} руб.`;

    document.querySelectorAll('.remove-item').forEach(button => {
        button.addEventListener('click', () => {
            cart.splice(button.getAttribute('data-index'), 1);
            updateCartUI();
        });
    });
}

if (checkoutButton) {
    checkoutButton.addEventListener('click', () => {
        if (cart.length) {
            // Передаем данные о корзине и общей сумме на сервер
            sendPurchaseData('checkout.php', { 
                cart: cart, 
                total: totalPriceElement.textContent 
            });
            // Не очищаем корзину сразу, а ждем ответа от сервера
            // Закрытие модального окна происходит после успешного ответа
        } else {
            showAddToCartNotification('Ваша корзина пуста.');
        }
    });
}

// уведомление о покупке
// if (checkoutButton) {
//     checkoutButton.addEventListener('click', () => {
//         if (cart.length) {
//             sendPurchaseData('checkout.php', { cart, total: totalPriceElement.textContent });
//             cart = [];
//             updateCartUI();
//             toggleModal(cartModal, false);

//             // Показать уведомление
//             const notification = document.getElementById('notification');
//             notification.classList.add('show');

//             // Удалить уведомление через 0.7 секунды
//             setTimeout(() => {
//                 notification.classList.remove('show');
//             }, 700);
//         } else {
//             alert('Ваша корзина пуста.');
//         }
//     });
// }



window.addEventListener('click', event => {
    if (event.target === cartModal) toggleModal(cartModal, false);
});

// *** Отправка данных на сервер ***
function sendPurchaseData(url, data) {
    // Получаем CSRF-токен из мета-тега
    const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
    
    fetch('/checkout', {
        method: 'POST',
        headers: { 
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': csrfToken
        },
        body: JSON.stringify(data),
    })
    .then(response => {
        if (!response.ok) {
            if (response.status === 401) {
                // Пользователь не авторизован
                showAddToCartNotification('Для оформления заказа необходимо авторизоваться');
                setTimeout(() => {
                    window.location.href = '/login';
                }, 3000);
                throw new Error('Необходима авторизация');
            }
            return response.json().then(err => Promise.reject(err));
        }
        return response.json();
    })
    .then(result => {
        if (result.status === 'success') {
            showAddToCartNotification('Заказ успешно оформлен! Письмо отправлено на вашу почту.');
            // Очищаем корзину только после успешного ответа
            cart = [];
            updateCartUI();
            toggleModal(cartModal, false);
        } else {
            showAddToCartNotification(result.message || 'Произошла ошибка при оформлении заказа');
        }
    })
    .catch(error => {
        console.error('Ошибка при отправке данных:', error);
        if (error.message !== 'Необходима авторизация') {
            showAddToCartNotification('Произошла ошибка при оформлении заказа');
        }
    });
}

// фрагмент с обработчиком смены каталога
let currentSection = 1;

document.getElementById('toggleButton').addEventListener('click', function () {
    const section1 = document.getElementById('section1');
    const section2 = document.getElementById('section2');

    if (currentSection === 1) {
        section1.style.display = 'none'; // Скрываем секцию 1
        section2.style.display = 'block'; // Показываем секцию 2
        currentSection = 2;
    } else {
        section1.style.display = 'block'; // Показываем секцию 1
        section2.style.display = 'none'; // Скрываем секцию 2
        currentSection = 1;
    }
});

// Функция для отображения уведомления при добавлении в корзину
function showAddToCartNotification(message) {
    // Удаляем существующее уведомление, если оно есть
    const existingNotification = document.querySelector('.notification');
    if (existingNotification) {
        document.body.removeChild(existingNotification);
    }
    
    // Создаем новое уведомление
    const notification = document.createElement('div');
    notification.className = 'notification';
    notification.innerHTML = `
        <span class="notification-icon">✓</span>
        <span>${message}</span>
        <button class="notification-close">&times;</button>
    `;
    
    // Добавляем уведомление в DOM
    document.body.appendChild(notification);
    
    // Показываем уведомление с небольшой задержкой для анимации
    setTimeout(() => {
        notification.classList.add('show');
    }, 10);
    
    // Обработчик для кнопки закрытия
    const closeButton = notification.querySelector('.notification-close');
    closeButton.addEventListener('click', () => {
        notification.classList.remove('show');
        setTimeout(() => {
            document.body.removeChild(notification);
        }, 300);
    });
    
    // Автоматически скрываем уведомление через 5 секунд
    setTimeout(() => {
        notification.classList.remove('show');
        setTimeout(() => {
            if (notification.parentNode) {
                document.body.removeChild(notification);
            }
        }, 300);
    }, 5000);
}
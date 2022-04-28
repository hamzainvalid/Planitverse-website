let carts = document.querySelectorAll('.add-cart')
let x = document.querySelectorAll('.paid')
let delivery = 0




let products = [
    {
        name: 'Daffy',
        tag: 'Dieffenbachia',
        price: 16.30,
        inCart: 0
    },
    {
        name: 'Skippy',
        tag: 'Scindapsus Pictus',
        price: 9.00,
        inCart: 0
    },
    {
        name: 'Gavin',
        tag: 'Agave Attenuata',
        price: 16.00,
        inCart: 0
    },
    {
        name: 'Crassula',
        tag: 'Crassula rupestrisÂ L.f.',
        price: 15.00,
        inCart: 0
    },
    {
        name: 'Remi',
        tag: 'Aloe brevifoliaÂ Mill',
        price: 12.00,
        inCart: 0
    },
    {
        name: 'Zee',
        tag: 'Zanzibar Gem',
        price: 17.00,
        inCart: 0
    },
    {
        name: 'Stern',
        tag: 'Strobilanthes Dyeriana',
        price: 18.00,
        inCart: 0
    },
    {
        name: 'Tank',
        tag: 'Dracaena trifasciata',
        price: 21.00,
        inCart: 0
    },
    {
        name: 'Molly',
        tag: 'Monstera deliciosaÂ Liebm',
        price: 49.00,
        inCart: 0
    },
    {
        name: 'Montsy',
        tag: 'Monstera adansoniiÂ Schott',
        price: 24.00,
        inCart: 0
    },
    {
        name: 'Aero',
        tag: 'Epipremnum aureum',
        price: 19.00,
        inCart: 0
    }
]

for(let i = 0; i < carts.length; i++){
    carts[i].addEventListener('click',() => {
        cartNumbers(products[i])
        totalCost(products[i])
    })
}



function onLoadCartNumbers(){
    let productNumbers = localStorage.getItem('cartNumbers')

    if(productNumbers){
        document.querySelector('.cart span').textContent = productNumbers
    }
}

function cartNumbers(product){
    let productNumbers = localStorage.getItem('cartNumbers')


    productNumbers = parseInt(productNumbers)
    if(productNumbers){
        localStorage.setItem('cartNumbers', productNumbers + 1)
        document.querySelector('.cart span').textContent = productNumbers + 1
    } else{
        localStorage.setItem('cartNumbers', 1)
        document.querySelector('.cart span').textContent = 1
    }

    setItems(product)

}

function setItems(product){
    let cartItems  = localStorage.getItem('productsInCart')
    cartItems = JSON.parse(cartItems)


    if(cartItems != null){
        if(cartItems[product.tag] == undefined){
            cartItems = {
                ...cartItems,
                [product.tag]: product
            }
        }
        cartItems[product.tag].inCart += 1
    } else{
        product.inCart = 1
        cartItems = {
            [product.tag]: product
    }

    }

    localStorage.setItem('productsInCart', JSON.stringify(cartItems))
}

function totalCost(product){
    //console.log('The product price is', product.price)
    let cartCost = localStorage.getItem('totalCost')

    console.log('My cartCost is', cartCost)

    if(cartCost != null){
        cartCost =parseInt(cartCost)
        localStorage.setItem('totalCost', cartCost + product.price)
    } else{
        localStorage.setItem('totalCost', product.price)
    }

}

function displayCart(){
    let cartItems = localStorage.getItem('productsInCart')
    cartItems = JSON.parse(cartItems)
    let productContainer = document.querySelector('.products-container')
    let cartCost = localStorage.getItem('totalCost')
    if(cartItems && productContainer){
        productContainer.innerHTML = ''
        Object.values(cartItems).map(item => {
            productContainer.innerHTML += `
            <tr class="products">
                <td>${item.name}</td>
                <td>€${item.price}.00</td>
                <td>${item.inCart}</td>
                <td style="margin-right: 0;">€${item.inCart * item.price}.00</td>
            </tr>
            `
        })

        productContainer.innerHTML += `
        <div class="basketTotalContainer">
            <br>
            Basket Total: €${cartCost}.00
            <br><br>
            Delivery: ${delivery}
            <br><br>
            Total: ${cartCost}
            
            
        </div>
        `
    }
}

function redirectFn(){
    window.location.href="payment.html"
}

function submitForm(e){
    e.preventDefault()

    let name = document.querySelector('.fname').value
    let email = document.querySelector('.email').value

    saveContactInfo(name, email)

    document.querySelector('.checkout_form').reset()
    sendEmail(name, email)
}

function sendEmai(name, email){
    Email.send({
        Host: "smtp.gmail.com",
        Username: 'noreply.hamza.ue@gmail.com',
        Password: 'jduqkmthazuhzxsn',
        To: `${email}`,
        From: 'noreply.hamza.ue@gmail.com',
        Subject: `Order reference:0000 PLANTIVERSE`,
        Body: `Congratulations ${name}, your order has been placed with order reference:0000`,
    })
}

onLoadCartNumbers()
displayCart()

var delete_data = document.getElementById('delete_data')
delete_data.onclick = function(){
    localStorage.clear()
}




/* AHMED - ORDER CONFIRMATION POPUP */

function showPopup() {
  var popup = document.getElementById("orderConfirmation");
  popup.classList.remove("Popup_hide");
}
function hidePopup() {
  var popup1 = document.getElementById("orderConfirmation");
  popup1.classList.add("Popup_hide");
}


n =  new Date();
 y = n.getFullYear();
 m = n.getMonth() + 1;
 d = n.getDate() + 1;
 document.getElementById("date").innerHTML = d + "." + m + "." + y;

 function displayPopup(){
    let cartItems = localStorage.getItem('productsInCart')
    cartItems = JSON.parse(cartItems)
    let productContainer = document.querySelector('.orderPopup')
    let cartCost = localStorage.getItem('totalCost')
    if(cartItems && productContainer){
        productContainer.innerHTML = ''
        Object.values(cartItems).map(item => {
            productContainer.innerHTML += `
            <div class="popup">
                ${item.name}
                <br>
                Quantity:${item.inCart}
                <br>
                <div class="total">
                Total:${item.inCart * item.price}
                <div class="popup_text">
            </div>
            `
        })

        productContainer.innerHTML += `
        <div class="basketTotalContainer">
            Basket Total: ${cartCost}
        </div>

        `
    }
}

displayPopup()

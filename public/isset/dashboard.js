var categories =document.getElementById('Categories');
var commands =document.getElementById('Commands');
var clients =document.getElementById('Clients');
var products =document.getElementById('Products');
var btncategories =document.getElementById('btnCategories');
var btncommands =document.getElementById('btnCommands');
var btnclients =document.getElementById('btnClients');
var btnproducts =document.getElementById('btnProducts');





btnproducts.addEventListener('click',e=>{
    products.classList.toggle('hidden');
    if(commands.classList[0]!="hidden"){
        commands.classList.add('hidden');
    }
    if(clients.classList[0]!="hidden"){
        clients.classList.add('hidden');
    }
    if(categories.classList[0]!="hidden"){
        categories.classList.add('hidden');
    }
})

btncategories.addEventListener('click',e=>{
    categories.classList.remove('hidden');
    if(commands.classList[0]!="hidden"){
        commands.classList.add('hidden');
    }
    if(clients.classList[0]!="hidden"){
        clients.classList.add('hidden');
    }
    if(products.classList[0]!="hidden"){
        products.classList.add('hidden');
    }
})

btnclients.addEventListener('click',e=>{
    clients.classList.toggle('hidden');
    if(commands.classList[0]!="hidden"){
        commands.classList.add('hidden');
    }
    if(categories.classList[0]!="hidden"){
        clients.classList.add('hidden');
    }
    if(products.classList[0]!="hidden"){
        products.classList.add('hidden');
    }
})

btncommands.addEventListener('click',e=>{
    commands.classList.toggle('hidden');
    if(categories.classList[0]!="hidden"){
        categories.classList.add('hidden');
    }
    if(clients.classList[0]!="hidden"){
        clients.classList.add('hidden');
    }
    if(products.classList[0]!="hidden"){
        products.classList.add('hidden');
    }
})



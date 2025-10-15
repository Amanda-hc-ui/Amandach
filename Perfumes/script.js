
// Carrinho
let carrinho = [];

const adicionarAoCarrinho = (produto) => {
    carrinho.push(produto);
    atualizarCarrinho();
};

const atualizarCarrinho = () => {
    const carrinhoLista = document.querySelector("#carrinhoLista");
    carrinhoLista.innerHTML = ""; // Limpar a lista

    if (carrinho.length === 0) {
        carrinhoLista.innerHTML = "<li>Nenhum item no carrinho</li>";
    } else {
        carrinho.forEach(item => {
            const li = document.createElement("li");
            li.textContent = item;
            carrinhoLista.appendChild(li);
        });
    }
};

const btnAdicionar = document.querySelectorAll('.btn-adicionar');
btnAdicionar.forEach((btn, index) => {
    const produtos = ['Perfume Floral', 'Perfume Amadeirado', 'Perfume Oriental', 'Perfume Cítrico', 'Perfume Floral Frutado', 'Perfume Exótico', 'Perfume Doce', 'Perfume Ambar', 'Perfume Fresh'];
    btn.addEventListener('click', () => adicionarAoCarrinho(produtos[index]));
});

// Modal Carrinho
const btnCarrinho = document.querySelector('.btn-carrinho');
const modalCarrinho = document.getElementById('modalCarrinho');
const fecharCarrinho = document.getElementById('fecharCarrinho');

btnCarrinho.addEventListener('click', () => {
    modalCarrinho.style.display = 'flex';
});

fecharCarrinho.addEventListener('click', () => {
    modalCarrinho.style.display = 'none';
});

// Modal Cadastro
const btnCadastro = document.querySelector('.btn-cadastro');
const modalCadastro = document.getElementById('modalCadastro');
const fecharCadastro = document.getElementById('fecharCadastro');
const formCadastro = document.getElementById('formCadastro');

btnCadastro.addEventListener('click', () => {
    modalCadastro.style.display = 'flex';
});

fecharCadastro.addEventListener('click', () => {
    modalCadastro.style.display = 'none';
});

// Cadastro
formCadastro.addEventListener('submit', (e) => {
    e.preventDefault();
    const nome = e.target.nomeCadastro.value;
    const email = e.target.emailCadastro.value;
    const senha = e.target.senhaCadastro.value;
    alert(`Cadastro realizado com sucesso!\nNome: ${nome}\nE-mail: ${email}`);
    modalCadastro.style.display = 'none'; // Fechar modal após o cadastro
});

// Navegação das seções
document.querySelector('.btn-sobre').addEventListener('click', () => {
    document.querySelector('#sobre').scrollIntoView({ behavior: 'smooth' });
});

document.querySelector('.btn-produtos').addEventListener('click', () => {
    document.querySelector('#produtos').scrollIntoView({ behavior: 'smooth' });
});

document.querySelector('.btn-contato').addEventListener('click', () => {
    document.querySelector('#contato').scrollIntoView({ behavior: 'smooth' });
});

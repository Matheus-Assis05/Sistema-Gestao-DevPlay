/**
 * Nesse arquivo receberei o input que o usuario deseja adicionar a tabela e o adiconarei fazendo o calculo
 * tambem levarei tal valor para o banco de dados
 */

//Conexao com o banco
const {createPool} = require('mysql');

const pool = createPool({
    host: "localhost",
    user: "root",
    password: "",
    database: "bancoSgf",
})

//Inputs e Tabela
const tabela = document.querySelector('#tabela')
const colMes = tabela.querySelector('.mes')
const colRenda = tabela.querySelector('.renda')
const colDespesa = tabela.querySelector('.despesa')
const colTotal = tabela.querySelector('.total')

//Enviar inputs para BD
function enviarBD(){
    let inMes = document.querySelector('#mes').value
    let inRenda = document.querySelector('#renda').value
    let inDespesa = document.querySelector('#despesa').value
    let inMail = document.querySelector('#Lmail').value

    //Query mysql para enviar pro BD

    pool.query(`insert into lancamento(email_user, mes, renda, despesa) values(${inMail}, ${inMes},${inRenda},${inDespesa})`, (err, res)=>{
        return console.log(res)
    })
}

function populateEnd(){
    const cep = document.querySelector("input[name=cep]")
    console.log(cep)

    fetch("https://cep.awesomeapi.com.br/json/29172680")
    .then( res => res.json())
    .then ( location => {

        cep.innerHTML = `<input value="${location.name}">`
       
    })

}


/*function populateUFs(){
    const ufSelect = document.querySelector("select[name=uf]")
    fetch("https://servicodados.ibge.gov.br/api/v1/localidades/estados")
    .then( res => res.json())
    .then( states => {
        for( const state of states ) {
            ufSelect.innerHTML += `<option value="${state.id}">${state.nome}`
        }
    }) 
}*/

populateEnd()

function getCities(event){

    const citySelect = document.querySelector("select[name=city]")
    const ufValue = event.target.value

    const url = `https://servicodados.ibge.gov.br/api/v1/localidades/estados/${ufValue}/municipios`

    fetch(url)
    .then( res => res.json())
    .then( cities => {
        for( const city of cities ) {
            citySelect.innerHTML += `<option value="${city.id}">${city.nome}`
        }

        citySelect.disabled = false
    }) 

}

document
    .querySelector("select[name=uf]")
    .addEventListener("change", getCities)



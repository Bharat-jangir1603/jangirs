const forms_das = document.querySelector('#forms_dash');
const forms_id = document.querySelector('#forms_id');
const forms_tbl = document.querySelector('#forms_tbl');
const forms_pg = document.querySelector('#forms_pg');

var val;

    let member_dom = Array.from(document.querySelectorAll('.member_id_'));
    member_dom.forEach((e) => {
        e.addEventListener('click', (e) => {
            console.log(e);
            e.preventDefault();
            val = 'code4/form_id';
            method = 'post';
            ajaxx(method, val);
        })
    })
    let admin_dom = Array.from(document.querySelectorAll('.admin_id_'));
    admin_dom.forEach((e) => {
        e.addEventListener('click', (e) => {
            console.log(e);
            e.preventDefault();
            val = 'code4/form_id';
            method = 'post';
            ajaxx(method, val);
            location.href = '#adad';
        })
    })
forms_das.onclick = (e) =>{
    e.preventDefault();
    val = 'code4/dash';
    method = 'post';
    forms_id.querySelector('.trg').classList.remove('spn');
    forms_tbl.querySelector('.trg').classList.remove('spn');
    forms_pg.querySelector('.trg').classList.remove('spn');
    forms_das.querySelector('.trg').classList.add('spn');
    ajaxx(method, val);

}
forms_id.onclick = (e) =>{
    e.preventDefault();
    val = 'code4/form_id';
    method = 'post';
    forms_tbl.querySelector('.trg').classList.remove('spn');
    forms_pg.querySelector('.trg').classList.remove('spn');
    forms_das.querySelector('.trg').classList.remove('spn');
    forms_id.querySelector('.trg').classList.add('spn');
    ajaxx(method, val);
}
forms_tbl.onclick = (e) =>{
    e.preventDefault();
    val = 'code4/forms_tbl';
    method = 'post';
    forms_id.querySelector('.trg').classList.remove('spn');
    forms_pg.querySelector('.trg').classList.remove('spn');
    forms_das.querySelector('.trg').classList.remove('spn');
    forms_tbl.querySelector('.trg').classList.add('spn');
    ajaxx(method, val);
}   
forms_pg.onclick = (e) =>{
    e.preventDefault();
    val = 'code4/forms_pg';
    method = 'post';
    forms_id.querySelector('.trg').classList.remove('spn');
    forms_tbl.querySelector('.trg').classList.remove('spn');
    forms_das.querySelector('.trg').classList.remove('spn');
    forms_pg.querySelector('.trg').classList.add('spn');
    ajaxx(method, val);
}

function ajaxx(method, val){

            let xml = new XMLHttpRequest();
            xml.open(method, 'http://localhost/code_4/public/'+val, true);
            xml.onload = () => {
                if(xml.readyState === XMLHttpRequest.DONE){
                    if(xml.status == 200){
                        if(val != 'logout'){
                        let data = xml.response;
                        document.querySelector('.contant').innerHTML = data;
                    }
                    }
                }
            }
            xml.send();
}

const searchbar = document.querySelector('#search_inp');
let list = document.querySelector('.contant');
searchbar.onkeyup = ()=>{
    let searchterm = searchbar.value;
    console.log(searchterm);
    if(searchterm == ""){
        searchbar.classList.add('start');
    }else{
    let xml = new XMLHttpRequest();
    xml.open('post', 'http://localhost/code_4/public/search/'+searchterm, true);
    xml.onload = () => {
        if(xml.readyState === XMLHttpRequest.DONE){
            if(xml.status == 200){
                let data = xml.response;
                list.innerHTML = data;
            }
        }
    }
    xml.send();
}
}
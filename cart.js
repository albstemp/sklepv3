var dane = decodeURIComponent(window.location.search.replace('?dane=', ''));
function Main(){
	var memory="";
	for(let i=0;i<localStorage.length;i++){
		memory+='<div>'+localStorage.getItem(i)+'</div>';
	}
	document.getElementById("showLocalStorage").innerHTML=memory;
	
	document.getElementById("cart").addEventListener('click',function(){
		var dane = "";
        for (let i = 0; i < localStorage.length; i++) {
            dane += localStorage.getItem(i);
        }
        window.location.href = 'cart.php?data=' + encodeURIComponent(dane);
	});
}
window.onload=Main;



/*
const express = require('express');
const session = require('express-session');
const app = express();

app.use(session({
    secret: 'secret-key',
    resave: false,
    saveUninitialized: true
}));

app.get('/login', (req, res) => {
    req.session.userId = 'user123'; // Ustawienie identyfikatora użytkownika w sesji
    res.send('Zalogowano pomyślnie');
});

app.get('/logout', (req, res) => {
    req.session.destroy((err) => {
        if (err) {
            console.error(err);
        } else {
            res.send('Wylogowano pomyślnie');
        }
    });
});

app.listen(3000, () => {
    console.log('Serwer działa na porcie 3000');
});
*/
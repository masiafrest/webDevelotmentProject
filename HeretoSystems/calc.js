var onBtn, offBtn, btns, disp;
var expr = "";

const chr = n => exp(expr + n);
const c = () => exp(expr.substr(0, expr.length-1));
const ce = () => exp('');
const exp = e => disp.attr('value', (expr = e));
function eq() {
    try {
        exp('' + eval(expr));
    } catch(e) {
        exp('error');
    }
}

window.onload = function() {
    btns = $('button'); disp = $('#display');
}

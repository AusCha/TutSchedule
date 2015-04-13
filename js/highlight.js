var CELLS;
document.addEventListener( 'DOMContentLoaded', function()
{
    var hi = document.getElementById('Highlight-Tutor');

    CELLS = document.getElementById('box').getElementsByTagName('td');
    hi.addEventListener('change', light);
}
);
function light(ev)
{
    var s = ev.target.options[ev.target.selectedIndex].text;
    console.log(s);
    for (var i = 0; i < CELLS.length; i++)
    {
        if (CELLS[i].textContent.indexOf(s) > -1)
            CELLS[i].setAttribute("class", s);
        else
            CELLS[i].removeAttribute("class");
    }

}
/*var opts = hi.options;
var CELLS = document.getElementById('data');
for (var elem, j = 0; elem = opts[j]; j++)
{
    if (elem.value == val)
    {
        sel.selectedIndex = j;
        break;
    }
}*/

$(document).ready(function()  {
function setEqualHeight(columns)
{
    var tallestcoloumn = 0;
    columns.each(
    function()
    {
        currentHeight = $(this).height();
        if(currentHeight > tallestcoloumn)
        {
            tallestcoloumn = currentHeight;
        }
    }
    );
    columns.height(tallestcoloumn);
}
setEqualHeight($("#PI, #LP, #news"));
});
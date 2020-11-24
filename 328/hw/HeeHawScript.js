document.getElementById("button").onclick = numbers;

function numbers()
{
    document.write("<p>");

    for(let i = 1; i <= 100; i++)
    {
        if ((i % 5 === 0) && (i % 3 === 0))//5 and 3
        {
            document.write("Hee Haw! ");
            document.write("<br>");
        }

        else if (i % 3 === 0)//just 3
        {
            document.write("Hee! ");
            document.write("<br>");
        }

        else if (i % 5 === 0)//just 5
        {
            document.write("Haw! ");
            document.write("<br>");
        }

        else
        {
           document.write(i);
            document.write("<br>");
        }

    }

    document.write("</p>");
}
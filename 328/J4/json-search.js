let myPeople =
{
    "people":
    [
        {
            "Name" : "Jane Doe",
            "First":"Jane",
            "Last":"Doe",
            "Sex" : "f",
            "Born" : 1876,
            "Died" : 1956,
            "Father" : "Petrus de Milliano",
            "Mother" : "Sophia van Damme"
        },

        {
            "Name" : "Jane Ramirez",
            "First":"Jane",
            "Last":"Ramirez",
            "Sex" : "f",
            "Born" : 1460,
            "Died" : 1520,
            "Father" : "Peter Jones",
            "Mother" : "Isabelle Long"
        },

        {
            "Name":"Haider John",
            "First":"Haider",
            "Last":"John",
            "Sex" : "m",
            "Born" : 1800,
            "Died" : 1900,
            "Father" : "Johnny Million",
            "Mother" : "Rosemary Poppy"
        },

        {
            "Name":"William Smith",
            "First":"William",
            "Last":"Smith",
            "Sex" : "m",
            "Born" : 2001,
            "Died" : 2080,
            "Father" : "Maximilian Chocolate",
            "Mother" : "Sharon Little"
        },

        {
            "Name":"Isabelle Rand",
            "First":"Isabelle",
            "Last":"Rand",
            "Sex" : "f",
            "Born" : 3030,
            "Died" : 4040,
            "Father" : "King Elro de Trad",
            "Mother" : "Kaitlyn Queen"
        }
    ]

};

document.getElementById("button").onclick = search;

function search()
{
    let searchData = document.getElementById("userInput").value.toLowerCase();
    let flag = false;

    document.getElementById("myData").innerHTML = "";
    document.getElementById("tester").innerHTML = "";

        for (let i = 0; i < myPeople.people.length; i++)
        {
            if(searchData === myPeople.people[i].Name.toLowerCase())
            {
                document.getElementById("myData").innerHTML =
                    "Name : " + myPeople.people[i].Name + "<br>" +
                    "Sex : " + myPeople.people[i].Sex + "<br>" +
                    "Born : " + myPeople.people[i].Born + "<br>" +
                    "Died : " + myPeople.people[i].Died + "<br>" +
                    "Father : " + myPeople.people[i].Father + "<br>" +
                    "Mother : " + myPeople.people[i].Mother + "<br>";
                flag = true;
                document.getElementById("tester").innerHTML = "";
            }
            if (searchData === myPeople.people[i].First.toLowerCase())
            {
                document.getElementById("myData").innerHTML +=
                    "<br>" +
                    "Name : " + myPeople.people[i].First + " " + myPeople.people[i].Last + "<br>" +
                    "Sex : " + myPeople.people[i].Sex + "<br>" +
                    "Born : " + myPeople.people[i].Born + "<br>" +
                    "Died : " + myPeople.people[i].Died + "<br>" +
                    "Father : " + myPeople.people[i].Father + "<br>" +
                    "Mother : " + myPeople.people[i].Mother + "<br>";
                flag = true;
                document.getElementById("tester").innerHTML = "";
            }
            if (flag === false)
            {
                document.getElementById("tester").innerHTML = "Person not found.";
            }
        }

    //}
}

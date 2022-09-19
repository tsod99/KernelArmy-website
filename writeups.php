<!DOCTYPE html>
<html>

<head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Compiled and minified JavaScript -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


    <title>Writeups - K3RN3L4RMY</title>
		
	<?php include __DIR__ . "/includes/footer.php"; ?>
</head>

<script>
</script>

<body class="bg-dark">

    <div class="container-fluid mt-4 mb-4">
        <div class="row">
            <div class="col-xs-0 col-md-2"></div>
            <div class="col-xs-12 col-md-8">
                <ul>
                    <li class="root">CTFs:</li>

                    <?php
                        require __DIR__ . "/includes/conn.php";

                        $monthsArr = [
                            "January", "February", "March", "April", "May", "June",
                            "July", "August", "September", "October", "November", "December"
                          ];

                        $years = getCTFYears();

                        for ($i = 0; $i < count($years); $i++)
                        {
                            echo '<li><button class="bg-dark writeup-collapse border-0" id="year-button" button-data="' . $years[$i]["year"] . '">' . $years[$i]['year'] . '</button>';
                        
                            if ($i == 0)
                            {
                                echo '<ul>';

                                $months = getMonthsByYear($years[$i]["year"]);

                                for ($j = 0; $j < count($months); $j++)
                                {
                                    echo '<li><button class="bg-dark writeup-collapse border-0" id="month-button" year-data="' . $years[$i]["year"] . '" button-data="' . $months[$j]["month"] . '">' . $monthsArr[(int)$months[$j]['month'] - 1] . '</button>';

                                    if ($j == 0)
                                    {
                                        echo '<ul>';

                                        $ctfs = getCtfsByMonthAndYear($months[$j]["month"], $years[$i]["year"]);

                                        for ($k = 0; $k < count($ctfs); $k++)
                                        {
                                            echo '<li><button class="bg-dark writeup-collapse border-0" id="ctf-button" month-data="' . $months[$j]["month"] . '" year-data="' . $years[$i]["year"] . '" button-data="' . $ctfs[$k]["ctf"] . '">' . $ctfs[$k]['ctf'] . '</button>';

                                            if ($k == 0)
                                            {
                                                echo '<ul>';

                                                $categories = getCategoriesByCtfsMonthAndYear($ctfs[$k]["ctf"], $months[$j]["month"], $years[$i]["year"]);

                                                for ($l = 0; $l < count($categories); $l++)
                                                {
                                                    echo '<li><button class="bg-dark writeup-collapse border-0" id="category-button" month-data="' . $months[$j]["month"] . '" year-data="' . $years[$i]["year"] . '" button-data="' . $categories[$l]["category"] . '" ctf-data="' . $ctfs[$k]["ctf"] . '">' . $categories[$l]["category"] . '</button>';

                                                    echo '<ul>';

                                                    $writeups = getWriteupsByCategoryCTFMonthAndYear($categories[$l]["category"], $ctfs[$k]["ctf"], $months[$j]["month"], $years[$i]["year"]);

                                                    for ($m = 0; $m < count($writeups); $m++)
                                                    {
                                                        echo '<li><a class="bg-dark border-0" target="_blank" href="./writeup?id=' . $writeups[$m]['id'] . '">' . $writeups[$m]['title'] . '</a></li>';
                                                    }

                                                    echo '</ul>';

                                                    echo '</li>';

                                                }

                                                echo '</ul>';
                                            }
                                            
                                            echo '</li>';
                                        }

                                        echo '</ul>';
                                    }

                                    echo '</li>';
                                }

                                echo '</ul>';
                            }

                            echo '</li>';
                        }

                    ?>
                </ul>


            </div>
        </div>
    </div>

    <style>
        * {
            margin: 0px;
            padding: 0px;
        }

        body {
            margin: 50px;
        }

        body, button, a {
            color: #1ea78d;
        }

        a {
            text-decoration: none;
        }

        ul {
            margin: 0px 0px 0px 20px;
            list-style: none;
            line-height: 2em;
            font-family: Arial;
        }

        ul li {
            font-size: 16px;
            position: relative;
        }

        ul li:before {
            position: absolute;
            left: -15px;
            top: 0px;
            content: '';
            display: block;
            border-left: 1px solid #ddd;
            height: 1em;
            border-bottom: 1px solid #ddd;
            width: 10px;
        }

        ul li:after {
            position: absolute;
            left: -15px;
            bottom: -7px;
            content: '';
            display: block;
            border-left: 1px solid #ddd;
            height: 100%;
        }

        ul li.root {
            margin: 0px 0px 0px -20px;
        }

        ul li.root:before {
            display: none;
        }

        ul li.root:after {
            display: none;
        }

        ul li:last-child:after {
            display: none;
        }
    </style>


<script src="./js/phpbridge.js"></script>

    <script>


function numToMonth(num)
{
    var month = [
  "January", "February", "March", "April", "May", "June",
  "July", "August", "September", "October", "November", "December"
];
return month[parseInt(num)-1];
}

function addMonths(prevLi, year)
{
    callPHP('getMonthsByYear', year).done(function(result) {
        var months = result.result;

        var ul = document.createElement('ul');

        for (let i = 0; i < months.length; i++)
        {
            var li = document.createElement('li');
            var button = document.createElement('button');
            button.className = "bg-dark writeup-collapse border-0";
            button.textContent = numToMonth(months[i].month);
            button.setAttribute('id', 'month-button');
            button.setAttribute('button-data', months[i].month);
            button.setAttribute('year-data', year);
            li.appendChild(button);
            ul.appendChild(li);
        }

        prevLi.append(ul);
    });

}

function addCtfs(prevLi, month, year)
{
    callPHP('getCtfsByMonthAndYear', [month, year]).done(function(result) {
        var ctfs = result.result;

        var ul = document.createElement('ul');

        for (let i = 0; i < ctfs.length; i++)
        {
            var li = document.createElement('li');
            var button = document.createElement('button');
            button.className = "bg-dark writeup-collapse border-0";
            button.textContent = ctfs[i].ctf;
            button.setAttribute('button-data', ctfs[i].ctf);
            button.setAttribute('id', 'ctf-button');
            button.setAttribute('year-data', year);
            button.setAttribute('month-data', month);
            li.appendChild(button);
            ul.appendChild(li);
        }

        prevLi.append(ul);
    });

}

function addWriteups(prevLi, category, ctf, month, year)
{
    callPHP('getWriteupsByCategoryCTFMonthAndYear', [category, ctf, month, year]).done(function(result) {
        var writeups = result.result;

        var ul = document.createElement('ul');

        for (let i = 0; i < writeups.length; i++)
        {
            var li = document.createElement('li');
            var a = document.createElement('a');
            a.className = "bg-dark border-0";
            a.textContent = writeups[i].title;
            a.href = "./writeup?id=" + writeups[i].id;
            a.setAttribute('target', "_blank");
            li.appendChild(a);
            ul.appendChild(li);
        }
        prevLi.append(ul);
    });

}

function addCategories(prevLi, ctf, month, year)
{
    callPHP('getCategoriesByCtfsMonthAndYear', [ctf, month, year]).done(function(result) {
        var categories = result.result;

        var ul = document.createElement('ul');

        for (let i = 0; i < categories.length; i++)
        {
            var li = document.createElement('li');
            var button = document.createElement('button');
            button.className = "bg-dark writeup-collapse border-0";
            button.textContent = categories[i].category;
            button.setAttribute('button-data', categories[i].category);
            button.setAttribute('id', 'category-button');
            button.setAttribute('year-data', year);
            button.setAttribute('month-data', month);
            button.setAttribute('ctf-data', ctf);
            li.appendChild(button);
            ul.appendChild(li);

            addWriteups(li, categories[i].category, ctf, month, year);
        }

        prevLi.append(ul);
    });
}

$(document).on('click', '.writeup-collapse', function () {

    if ($(this).parent().children().length == 1)
    {
        switch ($(this).attr('id'))
        {
            case 'year-button':
                addMonths($(this).parent(), $(this).attr('button-data'));
                break;

            case 'month-button':
                addCtfs($(this).parent(), $(this).attr('button-data'), $(this).attr('year-data'));
                break;

            case 'ctf-button':
                addCategories($(this).parent(), $(this).attr('button-data'), $(this).attr('month-data'), $(this).attr('year-data'));
                break;

            case 'category-button':
                addWriteups($(this).parent(), $(this).attr('button-data'), $(this).attr('ctf-data'), $(this).attr('month-data'), $(this).attr('year-data'));
                break;
        }
    }
    else
    {
        $(this).parent().children().next('ul').toggle(200);
    }
})



    </script>


</body>

</html>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Проверочный файл index.html с Bootstrap 4</title>

    <!-- Bootstrap CSS http://bootstrap-4.ru -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!-- Вспомогательные компоненты -->
    <!-- Подключение сеток-шаблонов https://graaf.space -->
    <link rel="stylesheet" href="https://grids.graaf.space/1200/12/15.css">
    <!-- Подключение плейсхолдера https://github.com/imsky/holder -->
    <script type="text/javascript" src="https://cdn.rawgit.com/imsky/holder/master/holder.js"></script>
    <!-- Поддержка Touch Screen http://hammerjs.github.io -->
    <script type="text/javascript" src="js/hammer.js"></script>
    <STYLE>
    .myred {
        color: red;
        border-color: red;
        border-width: 3px;
        border-style: solid;
        font-weight: bold;
    }
    .myblue {
        color: blue;
        border-color: blue;
        border-width: 2px;
        border-style: solid;
    }
</STYLE>
<!-- /Вспомогательные компоненты -->

</head>

<body>

    <main>

        <!-- @todo Витрина - стандартная Карусель Bootstrap с поддержкой Swipe -->
        <section id="ShopShowcase">

            <div id="carousel-showcase" class="carousel slide" data-ride="carousel" data-interval="3000">
                <ol class="carousel-indicators">
                    <li data-target="#carousel-showcase" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-showcase" data-slide-to="1"></li>
                    <li data-target="#carousel-showcase" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner myred" role="listbox">

                    <!-- Подтянуть только одну картинку разных размеров из альбома GooglePhoto -->
                    <div class="carousel-item active">
                        <div class="row justify-content-center">
                            <img class="d-block myblue" src="https://lh3.googleusercontent.com/NDt3ubeWavfVEZRauNtCpTvzUoSMFjLVYoLaM77RLJPv_KMrmh_C1EMDuzAEAdEhJi8SHRtqlSYdSZAOaAFZNsfSRKZeJ6YySB8u6SeQgQ3ymXq-8lC_cplRrlofrtsqW0Uge9BR=w450-h674-no" alt="GooglePhoto w450-h674 024-Derix-Catalog-2019.jpg">
                        </div>                    
                    </div> 
                    <div class="carousel-item">
                        <div class="row justify-content-center">
                            <img class="d-block myblue" src="data:application/octet-stream;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/4QAqRXhpZgAASUkqAAgAAAABADEBAgAHAAAAGgAAAAAAAABHb29nbGUAAP/bAIQAAwICAwICAwMDAwQDAwQFCAUFBAQFCgcHBggMCgwMCwoLCw0OEhANDhEOCwsQFhARExUVFRUMDxcYFhQYEhQXFAEDBAQGBQYKBgYKEg4LDhAVEA4SEBANDxAPDw0RDg8QDw4NDQ8PDxASDxANDxAPDg8NFQ0PDw4NEA0PDg8PDw0N/8AAEQgASAAwAwERAAIRAQMRAf/EABwAAAIDAQEBAQAAAAAAAAAAAAcJAwYIBQEEAP/EADsQAAIBAwMCAwQFCgcAAAAAAAECAwQFEQYSIQAHCDFBExQiUSMyYXGBCRUkQlJykaGx0RY0Q2KSwcL/xAAbAQACAgMBAAAAAAAAAAAAAAAFBgEEAAIDB//EADIRAAEDAgMGBQMDBQAAAAAAAAEAAhEDBAUhMRJBUWFxsROBkcHwIqHhFCPRMjNCYvH/2gAMAwEAAhEDEQA/AGiLNTOciNtxweeOc46hbwVIVhnj9uUc+fA8x6HgdYskjJZf8UnfnW1i1RTdu+0VsFbqwUQul1uEiq35up3LJCqCT4DJIY5D8WdqoODvBFO4rilElEbS1dWl0SOsIHdp/FR3q7Y9ztNWbu5SvddO3yaOneerggSpo2fCiVXhxlVJyyuCducHI540rtrzEyrdfD3MZtRHnI90xLZFUK26M/R8bc/Ln8eiSBSQvIooWJAikXcQxLZHPn1iySpGEgyTMgXP7PUqF46zO+6ORQvy/D+/UKcliXQddLrXvR3tvFhvVPb9RwatWirfbQif2lFSwrTIoB+oC0U4GPVXPn0v3byanZNljTa2kJGsT55/OyovieNbNoHXmoL1cIFpqWFqe0UiRLHLFV++CKFhJ67gR5582OOAOqtCC8mMwiNwIpgbWRjsmDUNf75QUci1kPtXhR2+Ic5AOcfbn+fTSDISKWwTkpEq0kqngFdA1QMfQrINwHnyPPyI/r1KgjKYyUiQwRthY5eDjyOPPPWKJKHPcHxFaB7YX46avNxqnvfsUnFuorfUVThZGKx73jQpGGYbQZGUZ9et9j6drIDmQPQEyfJagkmBryBPrA7rDPgu7f6iuGue4utr1WQUguxkjntMcwlIqJ5ve3aQo5HAlAH6w3P5ebLF2dGb9Z3cMtCnK0JafEG7IaTlvOo4ZLgeNzQupH0ranpKmCntFnui3SqoZJGWGQgMIwzsSzMGcYB4AZjnjrjYuO26mRqD5K7iRNRra06ETMCd27JbV7QXW296+02ldQ2qqpKyV7bFT10a1BL01V7usMyuqg7WwAMH0G4efTGxv0ja1+BJ9Sq9r3BhynLpO0PuiTp/TFRbLpTTypF7KmdirxzNvOY1iAI2jK7UXIJP1VbkjPXUABVnVHuEE6/99z6kK2VFTJRUstRVSxw08KGSWXPCqOWP3YB63AJyXIloS1NMXaq7+eIWs1Rc4qqaseKpuVohaR44ljh/y8Eu3/Sxwy8BmJzncwLVio/SYeWU4nIOmP8AKZjnllwGmkgRhLW3OINdUnZ1ESP6SInlnmN56wen2B7xpcfEnqbSdSKO32u5JAlNKp3xtWNGsiwyEDEcgDMuFyM/Dn4V68/p4ZUr236gHQwZ4HQ/OOm9egXOJU7e6NuRukRGoGYPMjtrJhD7xU99JO4Gpq/Suk3grNMUhejq7hOjCCvnDAO0QUq0iKVKI5KgncwDqUbpowjAiweLVjPt+ePLRKmLY74hFOlkBz3/AI4c9QhVpbu1qrtXcqM6e1XW6dakZS1VQQRskcZbkNGysJh5nY+4fLB56ZK1jQALWtl3yAlqleVnkOe76eg8ynUafFxhs1tS7V1LXXFaaMVVRSxGKKaXYN7opJ2qWyQMnAPmekk6pmQN8aXcJdHdkK+moZXjr7/MttRwCdsTZMxI9AUVk++QfPothdEVK4J0bn/H37Kjf1DTpEccvnkl4Vnc1+2lvlrLZJJ+cXgNHFtqCnL7VAUjywT6+rYIYHaWbELNlxSNOqMyco1nTXzg8esIHZXj6FUVKRiBnwjp5SOHSVFpbt8LUaZqK5U1XWTO1bLU0gkVY5mYyEEyDcSGxz8xnrG0hQtDRcNGx13SujqnjXHjA6mem/evh1zpqj0XQwSR1MU30Ksqxfq/CCAeigqbTSYiEMe3ZIHFUa00b3muuFNPBUmCrrrb+bJpYTEr07o3tJFBHxK0kMg3DglTg46B29Rz3vcePZGKrGtYxo4d/wCU57sRfE1f2Y0HeHLGe4WOhqZT8pDApbn97P8ADpRrsDKrm8CR6FHaVQvY13EdwszflG6e50E2ibyRts8K1cDTEZiimbYw3Z4DFVbB/wBjfIdM2BOYPEDtciOmc+yAYuH/AEbOmc9co/CEPbrw6Vlp7Aa97paxoWgWaytTWShqY8SezkkUy1ZU8o0nCIeCELnycdTWu/HuqdOmcg4H0M/Pwt6NsKNu91Te09o+flUCwWyYaAuF0Qk+7KHyvr6dF714kjkVRsmfSDzCFHde5yX2x0lPRh6eONf0icnLSNwB9yjnj546616bi0gFVqdVocCQiJDW0lz0r27qIqua61NPoqhhEsyKjJNRV9fTeyIGPhiRUAPG5VVj9boTatgPb/uZ6ECOyK1TLmuO9o9QTPdMV8FUtVUeF3QZ9qriKmnhRgQQUSplRfT9lcdLF6P339Ubt48JvRGOqttFWxGCqhNVCGDGKeMOhIYMDgjHBAx8scdUhkrJJKAXj2vy2Lw43ahVmD3SvpKMEkc/SCYj/jE3R3BWbV23kCftHug+KuItnc4H3WIdMX2noe2l6pXk4mjMRUH6vxLg4/j0yYgwmTyPYoTYvhoHMdwgvf6lZGfj6NoypX7MdGDkM0DJnRfu0tyrKjVNXbZZxJb6K21FTTwyDiPzLgEDOGYq2Dxkt+0cg9kMqPjfH2JHujlJxcxs7p9k1HwJ1kcnhW0I5TLRx1KMy8DPvcwzjjn1J+eSc+fSdef3n9UzUB+03oj6pqjgMEHlkr9/9uqea75LEf5TruHQ2TTmgtM19QYpqytqLm22MsFWFBGpOORn3hscejfLk3hNzSt6hfVMZQMid44TwQzELapcUw2mJznUc+MLDlLryxLbLqFvdIN9Mdkbl1LtkYAUryec/gej9zf276btl4Jg/cHihdtZ1mPG0wxI+xHBU646uswYr+cI5TggCNHf0+wf99bvxO2Gr/QE9guDcOuDkGepA7lRaAvcD6/KU0joKq2VdPuYYBYx5UfiwHValeU69aGTpOeWhHtO5WHWlShTBfAzjWdQfeE27wBVE1V4T9GSxY2e1uCjjz2186/+T/LpavhFd/XvCOWrgaTenZaE9rTuchnZmP1QT88f16oZK3BShfymGsv8UeKO50CuTFYLXR23YfIMyGpP4/pIB/dx6dQrDBDVjmX201XHT0tM9VUzSLFDBEu55XYgKijzJJIAHqT1ikmF0Kyxz2O611vrQnvdDUSUsyowZRJGxRgD6jKnn16xSjV4Yu2Fu1JV3zWGoUqWtdpjNPbqanba9ZWFdzbTzkRIASMEEyoPsNapiL7JwNIAu58Pyr9vhbb5pFQw0bxxH8JuXhg7Q1fZLszY9HV1z9+qqSSoqMrFsEHt5nnMOf1tpdlL8buSAoIUX6tU1nbbhBOvogTKbaQ2GmQNJiT1hf/Z" alt="GooglePhoto w48-h72 024-Derix-Catalog-2019.jpg">
                        </div>                    
                    </div>
                    <!-- /Подтянуть только одну картинку разных размеров из альбома GooglePhoto -->

                    <!-- Фото подтянуты из локального каталога -->
                    <!-- <div class="carousel-item">
                        <div class="row justify-content-center">
                            <img class="d-block myblue" src="img/001-Derix-Catalog-2019-B243.jpg" alt="001-Derix-Catalog-2019-B243.jpg">
                        </div>                    
                    </div> -->
                    <!-- /Фото подтянуты из локального каталога -->

                    <!-- Фото подтянуты из cloudinary.com -->
                    <!-- <div class="carousel-item">
                        <img class="d-block w-100" src="https://res.cloudinary.com/azwebdds/image/upload/v1543816928/Derix%20Catalog%202019/010-Derix-Catalog-2019-B6017.jpg" alt="First slide">
                    </div> -->
                    <!-- /Фото подтянуты из cloudinary.com -->

                    <!-- Плейсхолдеры -->
                    <div class="carousel-item">
                        <img class="d-block w-100" data-src="holder.js/600x600?theme=social" alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" data-src="holder.js/600x600?theme=social" alt="First slide">
                    </div>
                    <!-- /Плейсхолдеры -->

                </div>

                <a class="carousel-control-prev" href="#carousel-showcase" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carousel-showcase" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </section> <!-- /#ShopShowcase -->





        <!-- Вспомогательные компоненты -->
        <hr class="myred">

        <!-- Тестовый фрагмент -->
        <section>
            <div class="container-fluid">
                <nav class="navbar navbar-expand-lg navbar-dark bg-dark rounded">
                    <a class="navbar-brand" href="#">Navbar</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample09" aria-controls="navbarsExample09" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarsExample09">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Link</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link disabled" href="#">Disabled</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown09" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
                                <div class="dropdown-menu" aria-labelledby="dropdown09">
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                </div>
                            </li>
                        </ul>
                        <form class="form-inline my-2 my-md-0">
                            <input class="form-control" type="text" placeholder="Search" aria-label="Search">
                        </form>
                    </div>
                </nav>
            </div>

            <div class="container-fluid">
                <div class="jumbotron">

                    <h1 class="display-3">Hello, world!</h1>
                    <p class="lead">Это тестовый файл <b>index.html</b> с подключенным Bootstrap 4</p>
                    <hr class="m-y-md">
                    <div class="col-lg-12">
                        <div class="container">
                            <div class="row-fluid justify-content-lg-around justify-content-sm-center">
                                <a class="mt-sm-3 mb-sm-3 col-lg-4 col-sm mb-2 btn btn-primary" href="https://getbootstrap.com/"
                                target="_blank" role="button">Подробнее о Bootstrap 4 (eng)</a>
                                <a class="mt-sm-3 mb-sm-3 col-lg-4 col-sm btn btn-primary" href="http://bootstrap-4.ru" target="_blank" role="button">Подробнее о Bootstrap 4 (рус)</a>
                            </div>
                        </div>

                        <p class="alert alert-warning mt-3">
                            NB: Кнопки и выпадающее меню должны работать.
                            <br>Для Sublime Text 3: на период разработки подключен Live Reload JS. После окончания разработки
                            этот JS нужно отключить.
                        </p>
                    </div>
                </div>
            </div>
        </section>    
        <!-- /Тестовый фрагмент -->

    </main>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

    <!-- Реализация Swipe-поведения для Bootstrap -->
    <!-- <script>
        var hammer = new Hammer(document.querySelector('.carousel'));
        var $carousel = $(".carousel").carousel({"interval":0});
        hammer.get("swipe");
        hammer.on("swipeleft", function(){
            $carousel.carousel("next");
        });
        hammer.on("swiperight", function(){
            $carousel.carousel("prev");
        });
    </script> -->

</body>

</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;700;900&display=swap" rel="stylesheet">
    <title>john</title>

    <script>
    // Удалить .html из URL-адреса
    if (window.location.href.endsWith('.html')) {
      window.location.href = window.location.href.slice(0, -5);
    }
    </script>
</head>
<body>
    <div class="wrapper">
        <header class="header" id="header">
            <div class="header__container">
                <div class="header__menu menu">
                    <div class="menu__icon">
                    <span></span>
                    </div>
                    <nav class="menu__body">
                        <ul class="menu__list">
                            <li class="menu__item"><a href="work.php" class="menu__link">Works</a></li>
                            <li class="menu__item"><a href="blog.php" class="menu__link">Blog</a></li>
                            <li class="menu__item"><a href="contact.php" class="menu__link">Contact</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </header>
        <main class="page" id="page">
            <section class="page__welcome">
                <div class="welcome__container">
                    <div class="welcome__content">
                        <h1 class="welcome__title">Hi, I am Timati, <br> Creative Technologist</h1>
                        <p class="welcome__text">Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat duis enim velit mollit. Exercitation veniam consequat sunt nostrud amet.</p>
                        <a href="#" class="welcome__button">Download Resume</a>
                    </div>
                    <div class="welcome__image"><img src="/assets/image/welcome/avatare.png" alt="Аватар"></div>
                </div>
            </section>
            <section class="page__posts">
                <div class="post__container">
                    <div class="posts__header">
                        <div class="posts__title">Recent posts</div>
                        <a href="#" class="posts__view-all">View all</a>
                    </div>
                    <div class="post__items">
                        <div class="post__column">
                            <div class="post__item">
                                <a href="#" class="post__title">Making a design system from scratch</a>
                                <div class="post__info">12 Feb 2020<span>|</span>Design, Pattern</div>
                                <p class="post__text">Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat duis enim velit mollit. Exercitation veniam consequat sunt nostrud amet.</p>
                            </div>
                            <div class="post__item">
                                <a href="#" class="post__title">Creating pixel perfect icons in Figma</a>
                                <div class="post__info">12 Feb 2020<span>|</span>Figma, Icon Design</div>
                                <p class="post__text">Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat duis enim velit mollit. Exercitation veniam consequat sunt nostrud amet.</p>
                            </div>
                            <div class="post__item">
                                <a href="#" class="post__title">Creating pixel perfect icons in Figma</a>
                                <div class="post__info">12 Feb 2020<span>|</span>Figma, Icon Design</div>
                                <p class="post__text">Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat duis enim velit mollit. Exercitation veniam consequat sunt nostrud amet.</p>
                            </div>
                            <div class="post__item">
                                <a href="#" class="post__title">Creating pixel perfect icons in Figma</a>
                                <div class="post__info">12 Feb 2020<span>|</span>Figma, Icon Design</div>
                                <p class="post__text">Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat duis enim velit mollit. Exercitation veniam consequat sunt nostrud amet.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="page__works">
                <div class="works__container">
                    <div class="works__header">
                        <div class="works__title">Featured works</div>
                    </div>
                    <div class="works__items">
                        <div class="works__column">

                            <div class="work__item-inner">
                                <div class="work__item">
                                    <div class="work__image"><img src="/assets/image/works/1.png" alt=""></div>
                                    <div class="work__content">
                                        <a href="./works/designing-dashboards.html" class="work__title">Designing Dashboards</a>
                                        <div class="work__info">
                                            <div class="work__data">2020</div>
                                            <div class="work__program">Dashboard</div>
                                        </div>
                                        <div class="work__text">Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat duis enim velit mollit. Exercitation veniam consequat sunt nostrud amet.</div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="work__item-inner">
                                <div class="work__item">
                                    <div class="work__image"><img src="/assets/image/works/2.png" alt=""></div>
                                    <div class="work__content">
                                        <a href="#" class="work__title">Vibrant Portraits of 2020</a>
                                        <div class="work__info">
                                            <div class="work__data">2018</div>
                                            <div class="work__program">Illustration</div>
                                        </div>
                                        <div class="work__text">Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat duis enim velit mollit. Exercitation veniam consequat sunt nostrud amet.</div>
                                    </div>
                                </div>
                            </div>

                            <div class="work__item-inner">
                                <div class="work__item">
                                    <div class="work__image"><img src="/assets/image/works/3.png" alt=""></div>
                                    <div class="work__content">
                                        <a href="#" class="work__title">36 Days of Malayalam type</a>
                                        <div class="work__info">
                                            <div class="work__data">2018</div>
                                            <div class="work__program">Typography</div>
                                        </div>
                                        <div class="work__text">Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat duis enim velit mollit. Exercitation veniam consequat sunt nostrud amet.</div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </section>
        </main>
        <footer class="footer" id="footer">
            <div class="footer__container">
                <div class="footer__content">
                    <div class="footer__icons">
                        <a href="#" class="footer__icons-link"><img src="/assets/image/footer/fb.svg" alt="facebook"></a>
                        <a href="#" class="footer__icons-link"><img src="/assets/image/footer/insta.svg" alt="instagram"></a>
                        <a href="#" class="footer__icons-link"><img src="/assets/image/footer/twitter.svg" alt="twitter"></a>
                        <a href="#" class="footer__icons-link"><img src="/assets/image/footer/Linkedin.svg" alt="linkedin"></a>
                    </div>
                    <div class="footer__copyright">Copyright ©2020 All rights reserved </div>
                </div>
            </div>
        </footer>
    </div>

    <!-- javascript -->
    <script src="/assets/js/main.js"></script>
</body>
</html>

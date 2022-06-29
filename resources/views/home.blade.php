<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600" rel="stylesheet">
    <link rel="stylesheet" href="{{ mix('/css/app.css') }}">
    <title>Trillo &ndash; your all-in-one booking app</title>
</head>
<body>
   <div class="container">
       <header class="header">
           <img src="/img/logo.png" alt="" class="logo">
           <form action="#" class="search">
               <input type="text" class="search__input" placeholder="search hotels">
               <button class="search__button">
                   <svg class="search__icon">
                       <use xlink:href="/img/sprite.svg#icon-magnifying-glass"></use>
                   </svg>
               </button>
           </form>
           <nav class="user-nav">
               <div class="user-nav__icon-box">
                   <svg class="user-nav__icon">
                       <use xlink:href="/img/sprite.svg#icon-bookmark"></use>
                   </svg>
                   <span class="user-nav__notification">4</span>
               </div>
               <div class="user-nav__icon-box">
                   <svg class="user-nav__icon">
                       <use xlink:href="/img/sprite.svg#icon-chat"></use>
                   </svg>
                   <span class="user-nav__notification">13</span>
               </div>
               <div class="user-nav__user">
                   <img src="/img/user.jpg" alt="User" class="user-nav__user-photo">
                   <span class="user-nav__user-name">Sekhmet</span>
               </div>
           </nav>
       </header>
       <div class="content">
           <nav class="sidebar">
               <ul class="side-nav">
                   <li class="side-nav__item side-nav__item--active">
                       <a href="#" class="side-nav__link">
                           <svg class="side-nav__icon">
                               <use xlink:href="img/sprite.svg#icon-home"></use>
                           </svg>
                           <span>Hotel</span>
                       </a>
                   </li>
                   <li class="side-nav__item">
                       <a href="#" class="side-nav__link">
                           <svg class="side-nav__icon">
                               <use xlink:href="img/sprite.svg#icon-aircraft-take-off"></use>
                           </svg>
                           <span>Flight</span>
                       </a>
                   </li>
                   <li class="side-nav__item">
                       <a href="#" class="side-nav__link">
                           <svg class="side-nav__icon">
                               <use xlink:href="img/sprite.svg#icon-key"></use>
                           </svg>
                           <span>Car Rental</span>
                       </a>
                   </li>
                   <li class="side-nav__item">
                       <a href="#" class="side-nav__link">
                           <svg class="side-nav__icon">
                               <use xlink:href="img/sprite.svg#icon-map"></use>
                           </svg>
                           <span>Tours</span>
                       </a>
                   </li>
               </ul>
               <div class="legal">
                   &copy; 2021 by trillo. All rights reserved
               </div>
           </nav>
           <main class="hotel-view">
               <div class="gallery">
                   <figure class="gallery__item">
                       <img src="/img/hotel-1.jpg" alt="Hotel 1" class="gallery__photo">
                   </figure>
                   <figure class="gallery__item">
                       <img src="/img/hotel-2.jpg" alt="Hotel 2" class="gallery__photo">
                   </figure>
                   <figure class="gallery__item">
                       <img src="/img/hotel-3.jpg" alt="Hotel 3" class="gallery__photo">
                   </figure>
               </div>
               <div class="overview">
                   <h1 class="overview__heading">
                       Hotel Geuseppe
                   </h1>
                   <div class="overview__stars">
                       <svg class="overview__icon-star">
                           <use xlink:href="/img/sprite.svg#icon-star"></use>
                       </svg>
                       <svg class="overview__icon-star">
                           <use xlink:href="/img/sprite.svg#icon-star"></use>
                       </svg>
                       <svg class="overview__icon-star">
                           <use xlink:href="/img/sprite.svg#icon-star"></use>
                       </svg>
                       <svg class="overview__icon-star">
                           <use xlink:href="/img/sprite.svg#icon-star"></use>
                       </svg>
                       <svg class="overview__icon-star">
                           <use xlink:href="/img/sprite.svg#icon-star"></use>
                       </svg>
                       <svg class="overview__icon-star">
                           <use xlink:href="/img/sprite.svg#icon-star"></use>
                       </svg>
                   </div>
                   <div class="overview__location">
                       <svg class="overview__icon-location">
                           <use xlink:href="/img/sprite.svg#icon-location-pin"></use>
                       </svg>
                       <button class="btn-inline">Fucking, Finland</button>
                   </div>
                   <div class="overview__rating">
                       <div class="overview__rating-average">6.9</div>
                       <div class="overview__rating-count">669 votes</div>
                   </div>
               </div>
               <div class="detail">
                   <div class="description">
                        <p class="paragraph">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                            Maxime facilis voluptas labore adipisci aut, 
                            perspiciatis accusantium explicabo magnam cupiditate ab quae 
                            vitae eius! Iusto voluptas praesentium nulla maxime incidunt fugit.
                        </p>
                        <p class="paragraph">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                            Maxime facilis voluptas labore adipisci aut, 
                            perspiciatis accusantium explicabo magnam 
                        </p>
                        <ul class="list">
                            <li class="list__item">
                                Close to the death
                            </li>
                            <li class="list__item">
                                voluptas labore 
                            </li>
                            <li class="list__item">
                                amet consectetur adipisicing
                            </li>
                            <li class="list__item">
                                perspiciatis accusantium
                            </li>
                            <li class="list__item">
                                ipsum dolor sit amet
                            </li>
                            <li class="list__item">
                                labore adipisci aut
                            </li>
                            <li class="list__item">
                                voluptas praesentium nulla
                            </li>
                            <li class="list__item">
                                uptas labore adipisci
                            </li>
                        </ul>
                        <div class="recommend">
                            <p class="recommend__count">
                                Lucy and 3 other friends recomend this hotel
                            </p>
                            <div class="recommend__friends">
                                <img src="/img/user-3.jpg" alt="1" class="recommend__photo">
                                <img src="/img/user-4.jpg" alt="1" class="recommend__photo">
                                <img src="/img/user-5.jpg" alt="1" class="recommend__photo">
                                <img src="/img/user-6.jpg" alt="1" class="recommend__photo">
                            </div>
                        </div>
                   </div>
                   <div class="user-reviews">
                        <figure class="review">
                            <blockquote class="review__text">
                                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Consequatur facere distinctio necessitatibus non, delectus assumenda 
                            </blockquote>
                            <figcaption class="review__user">
                                <img src="/img/user-1.jpg" alt="review 1" class="review__photo">
                                <div class="review__user-box">
                                    <p class="review__user-name">Nick Snitch</p>
                                    <p class="review__user-date">Feb 21rd, 2021</p>
                                </div>
                                <div class="review__rating">6.9</div>
                            </figcaption>
                        </figure>
                         <figure class="review">
                            <blockquote class="review__text">
                                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Consequatur facere distinctio necessitatibus non, delectus assumenda 
                            </blockquote>
                            <figcaption class="review__user">
                                <img src="/img/user-2.jpg" alt="review 1" class="review__photo">
                                <div class="review__user-box">
                                    <p class="review__user-name">Mary Jhonice</p>
                                    <p class="review__user-date">Sept 9th, 2021</p>
                                </div>
                                <div class="review__rating">6.6</div>
                            </figcaption>
                        </figure>
                        <button class="btn-inline">Show all <span>&rarr;</span></button>
                   </div>
               </div>
                <div class="cta">
                       <h2 class="cta__book-now">
                           Good news. we have 4 free rooms for your selected date
                       </h2>
                       <button class="btn">
                           <span class="btn__visible">Book Now</span>
                           <span class="btn__invisible">Only 4 rooms left</span>
                       </button>
                   </div>
           </main>
       </div>
   </div>
</body>
</html>
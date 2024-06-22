@extends('home.layouts.app')
@section('title', 'Home')

@section('content')
    <!--<< banner >>-->
    <section class="banner__section">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-8">
                    <div class="banner__content">
                        <a href="#" class="bn__currently">
                            <span class="d-block">
                                Atualmente disponível para freelance
                            </span>
                            <span class="d-flex gap-4 align-items-center">
                                mundialmente
                                <i class="bi bi-arrow-up-right"></i>
                            </span>
                        </a>
                        <h1>
                            <span class="hone"> Murillo Lima</span>
                            <span class="d-block designers" data-text="Developer">Developer</span>
                        </h1>
                        <div class="video__area">
                            <img src="{{ asset('home/img/banner/bn-arrow.png') }}" class="vid__arrow" alt="img">
                            <a href="https://www.youtube.com/watch?v=zFuJgOiUEso&amp;ab_channel=SujithRajendran"
                                class="video__80 video-btn">
                                <i class="bi bi-play-fill"></i>
                            </a>
                            <span class="proces">
                                Processos code
                            </span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="banner__thumb" data-aos="fade-up-right" data-aos-duration="300">
                        <img src="{{ asset('home/img/banner/banner-man.png') }}" alt="man-img">
                    </div>
                </div>
            </div>
        </div>
        <div class="banner__leftinfo">
            <div class="left__infomobile">
                <a href="index.html#0">
                    <img src="{{ asset('home/img/banner/dial.png') }}" alt="img">
                </a>
                <a href="index.html#0">
                    (+55)-99991106799
                </a>
            </div>
            <div class="right__infoscroll">
                <a href="index.html#prot" class="scroll">
                    scroll down
                </a>
                <a href="index.html#prot" class="scroll__bar">
                    <img src="{{ asset('home/img/banner/scroll-down.png') }}" alt="img">
                </a>
            </div>
        </div>
        <div class="banner__rightinfo">
            <div class="right__infoscroll">
                <a href="index.html#0" class="scroll">
                    Follow Me
                </a>
                <a href="index.html#0" class="scroll__bar">
                    <img src="{{ asset('home/img/banner/scroll-down.png') }}" alt="img">
                </a>
            </div>
            <div class="banner__xlsocial">
                <ul class="banner__soci d-grid justify-content-center">
                    <li>
                        <a href="index.html#0">
                            <i class="bi bi-facebook"></i>
                        </a>
                    </li>
                    <li>
                        <a href="index.html#0">
                            <i class="bi bi-twitter"></i>
                        </a>
                    </li>
                    <li>
                        <a href="index.html#0">
                            <i class="bi bi-instagram"></i>
                        </a>
                    </li>
                    <li>
                        <a href="index.html#0">
                            <i class="bi bi-globe"></i>
                        </a>
                    </li>
                    <li>
                        <a href="index.html#0">
                            <i class="bi bi-linkedin"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <!--<< banner >>-->

    <!--<< text slide v1 >>-->
    <div class="marquee-wrapper text-slider">
        <div class="marquee-inner to-left">
            <ul class="marqee-list d-flex">
                <li class="marquee-item">
                    <img src="{{ asset('home/img/banner/ts1.png') }}" alt=""> <span class="stroke-text"><img
                            src="home/img/banner/ts2.png" alt=""></span>
                    <img src="{{ asset('home/img/banner/ts3.png') }}" alt=""> <span class="stroke-text"><img
                            src="{{ asset('home/img/banner/ts4.png') }}" alt=""></span>
                    <img src="{{ asset('home/img/banner/ts1.png') }}" alt=""> <span class="stroke-text"><img
                            src="{{ asset('home/img/banner/ts2.png') }}" alt=""></span>
                    <img src="{{ asset('home/img/banner/ts3.png') }}" alt=""> <span class="stroke-text"><img
                            src="{{ asset('home/img/banner/ts4.png') }}" alt=""></span>
                    <img src="{{ asset('home/img/banner/ts1.png') }}" alt=""> <span class="stroke-text"><img
                            src="{{ asset('home/img/banner/ts2.png') }}" alt=""></span>
                    <img src="{{ asset('home/img/banner/ts3.png') }}" alt=""> <span class="stroke-text"><img
                            src="{{ asset('home/img/banner/ts4.png') }}" alt=""></span>
                </li>
            </ul>
        </div>
    </div>
    <!--<< text slide v1 >>-->

    <!--<< about personal >>-->
    <section class="about__section pt-120 pb-120" id="about">
        <div class="container">
            <div class="personal__head text-center">
                <img src="{{ asset('home/img/about/section-star.png') }}" class="mb-30" alt="star"
                    data-aos="fade-up" data-aos-duration="1000">
                <p class="descrp" data-aos="fade-up" data-aos-duration="1500">
                    Sou Murillo Lima, trabalho de forma independente, atuo com o desenvolvimento web e mobile.
                </p>
            </div>
            <div class="singletab">
                <ul class="tablinks">
                    <li class="nav-links active">
                        <button class="tablink">Sobre</button>
                    </li>
                    <li class="nav-links">
                        <button class="tablink">Experiências</button>
                    </li>
                    <li class="nav-links">
                        <button class="tablink">Educação</button>
                    </li>
                    <li class="nav-links">
                        <button class="tablink">Habilidades</button>
                    </li>
                </ul>
                <div class="tabcontents">
                    <div class="tabitem active">
                        <div class="about__v1wrap">
                            <div class="row g-4 align-items-lg-start align-items-center">
                                <div class="col-lg-5">
                                    <div class="about__onethumb" data-aos="zoom-in" data-aos-duration="500">
                                        <img src="{{ asset('home/img/about/personal-infothumb.png') }}" alt="img">
                                    </div>
                                </div>
                                <div class="col-lg-7">
                                    <div class="about__onecontent">
                                        <h2 class="h2-head" data-aos="fade-up" data-aos-duration="500">
                                            Informação pessoal
                                        </h2>
                                        <p class="p-descrip" data-aos="fade-up" data-aos-duration="500">
                                            Formado em Sistema de informação na faculdade FACIMP, atualmente atuo como
                                            freelancer, oferecendo soluções completas para sistemas web, mobile, desktop, e
                                            sistemas integrados.
                                        </p>
                                        <div class="about__contactwrap">
                                            <div class="row g-4">
                                                <div class="col-xxl-6 col-xl-6 col-lg-12 col-md-6" data-aos="zoom-in">
                                                    <div class="abox">
                                                        <div class="about__contbox__item">
                                                            <span class="ptext fz-18 mb-20 d-block">
                                                                E-mail
                                                            </span>
                                                            <a href="">
                                                                <span class="__cf_email__"
                                                                    data-cfemail="">contato@murillolimadev.com.br</span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xxl-6 col-xl-6 col-lg-12 col-md-6" data-aos="zoom-in">
                                                    <div class="abox">
                                                        <div class="about__contbox__item">
                                                            <span class="ptext fz-18 mb-20 d-block">
                                                                Telefone
                                                            </span>
                                                            <a href="">
                                                                +(55) 99 99110-6799
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xxl-6 col-xl-6 col-lg-12 col-md-6" data-aos="zoom-in">
                                                    <div class="abox">
                                                        <div class="about__contbox__item">
                                                            <span class="ptext fz-18 mb-20 d-block">
                                                                Endereço
                                                            </span>
                                                            <a href="index.html#0">
                                                                Centro - Estreito-MA
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xxl-6 col-xl-6 col-lg-12 col-md-6" data-aos="zoom-in">
                                                    <div class="abox">
                                                        <div class="about__contbox__item">
                                                            <span class="ptext fz-18 mb-20 d-block">
                                                                Follow
                                                            </span>
                                                            <ul class="d-flex align-items-center gap-2 gap-xl-4">
                                                                <li>
                                                                    <a href="index.html#0">
                                                                        <i class="bi bi-facebook"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="index.html#0">
                                                                        <i class="bi bi-twitter"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="index.html#0">
                                                                        <i class="bi bi-instagram"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="index.html#0">
                                                                        <i class="bi bi-globe"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="index.html#0">
                                                                        <i class="bi bi-linkedin"></i>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tabitem">
                        <div class="about__v1wrap">
                            <div class="row g-4 align-items-lg-start align-items-center">
                                <div class="col-lg-5">
                                    <div class="about__onethumb">
                                        <img src="{{ asset('home/img/about/personal-infothumb.png') }}" alt="img">
                                    </div>
                                </div>
                                <div class="col-lg-7">
                                    <div class="about__onecontent">
                                        <h2>
                                            Minhas Experiências
                                        </h2>
                                        <p>
                                            Durante meu percurso profissional de 6 anos como desenvolvedor full stack,
                                            trabalhei em diferentes projetos desafiadores. Um desses projetos foi a criação
                                            de um sistema de gerenciamento de vendas para uma empresa de e-commerce. Nesse
                                            projeto, tive a oportunidade de aplicar minhas habilidades de desenvolvimento
                                            tanto no front-end, utilizando HTML, CSS e JavaScript, quanto no back-end,
                                            utilizando PHP e MySQL. Além disso, pude trabalhar em equipe, colaborando com
                                            outros desenvolvedores e designers para entregar um produto final de alta
                                            qualidade.
                                        </p>
                                        <div class="exprience__box mt-30">
                                            <div class="exri__item">
                                                <span class="fz-18 fw-500 base">
                                                    Em 2008
                                                </span>
                                                <div class="expri__cont">
                                                    <h4 class="mb-15 text-white">
                                                        CREDI SHOP S/A
                                                    </h4>
                                                    <p class="fz-18 pra d-block">
                                                        Suporte têcnico
                                                    </p>
                                                </div>
                                            </div>

                                            {{-- <div class="exri__item">
                                                <span class="fz-18 fw-500 base">
                                                    In 2023
                                                </span>
                                                <div class="expri__cont">
                                                    <h4 class="mb-15 text-white">
                                                        Senior UI Designer
                                                    </h4>
                                                    <p class="fz-18 pra d-block">
                                                        Fiverr.com
                                                    </p>
                                                </div>
                                            </div> --}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tabitem">
                        <div class="about__v1wrap">
                            <div class="row g-4 align-items-lg-start align-items-center">
                                <div class="col-lg-5">
                                    <div class="about__onethumb">
                                        <img src="{{ asset('home/img/about/personal-infothumb.png') }}" alt="img">
                                    </div>
                                </div>
                                <div class="col-lg-7">
                                    <div class="about__onecontent">
                                        <h2>
                                            Minha educação
                                        </h2>
                                        <p>
                                            Formado em Sistema de informação na faculdade FACIMP, atualmente atuo como
                                            freelancer, oferecendo soluções completas para sistemas web, mobile, desktop, e
                                            sistemas integrados.
                                        </p>
                                        <div class="exprience__box mt-30">
                                            <div class="exri__item">
                                                <span class="fz-18 fw-500 base">
                                                    2008-2010
                                                </span>
                                                <div class="expri__cont">
                                                    <h4 class="mb-15 text-white">
                                                        CREDI SHOP S/A
                                                    </h4>
                                                    <p class="fz-18 pra d-block">
                                                        Suporte técnico
                                                    </p>
                                                </div>
                                            </div>

                                            {{-- <div class="exri__item">
                                                <span class="fz-18 fw-500 base">
                                                    2016-2018
                                                </span>
                                                <div class="expri__cont">
                                                    <h4 class="mb-15 text-white">
                                                        Web Design Course
                                                    </h4>
                                                    <p class="fz-18 pra d-block">
                                                        New York University
                                                    </p>
                                                </div>
                                            </div> --}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tabitem">
                        <div class="about__v1wrap">
                            <div class="row g-4 align-items-lg-start align-items-center">
                                <div class="col-lg-5">
                                    <div class="about__onethumb">
                                        <img src="{{ asset('home/img/about/personal-infothumb.png') }}" alt="img">
                                    </div>
                                </div>
                                <div class="col-lg-7">
                                    <div class="about__onecontent">
                                        <h2>
                                            Minhas habilidades
                                        </h2>
                                        <p>
                                            HTML / CSS <br>
                                            JavaScript <br>
                                            Git e GitHub <br>
                                            Linguagens back-end<br>
                                            Arquitetura web<br>
                                            HTTP e REST<br>
                                            Armazenamento de banco de dados<br>
                                            Habilidades básicas de design<br>
                                            NPM<br>
                                            Habilidades pessoais<br>
                                            Desenvolvimento mobile
                                        </p>
                                        <div class="about__contactwrap">
                                            <div class="row g-4">
                                                <div class="col-xxl-6 col-xl-6 col-lg-12 col-md-6">
                                                    <div class="abox myskill__item">
                                                        <div class="thumb">
                                                            <img src="{{ asset('home/img/about/figma.png') }}"
                                                                alt="img">
                                                        </div>
                                                        <div class="mys">
                                                            <span class="ptext fz-18 mb-15 d-block">
                                                                HTML
                                                            </span>
                                                            <h1 class="fw-600">
                                                                98%
                                                            </h1>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xxl-6 col-xl-6 col-lg-12 col-md-6">
                                                    <div class="abox myskill__item">
                                                        <div class="thumb">
                                                            <img src="{{ asset('home/img/about/word.png') }}"
                                                                alt="img">
                                                        </div>
                                                        <div class="mys">
                                                            <span class="ptext fz-18 mb-15 d-block">
                                                                PHP
                                                            </span>
                                                            <h1 class="fw-600">
                                                                82%
                                                            </h1>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xxl-6 col-xl-6 col-lg-12 col-md-6">
                                                    <div class="abox myskill__item">
                                                        <div class="thumb">
                                                            <img src="{{ asset('home/img/about/html.png') }}"
                                                                alt="img">
                                                        </div>
                                                        <div class="mys">
                                                            <span class="ptext fz-18 mb-15 d-block">
                                                                HTML
                                                            </span>
                                                            <h1 class="fw-600">
                                                                98%
                                                            </h1>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xxl-6 col-xl-6 col-lg-12 col-md-6">
                                                    <div class="abox myskill__item">
                                                        <div class="thumb">
                                                            <img src="{{ asset('home/img/about/boot.png') }}"
                                                                alt="img">
                                                        </div>
                                                        <div class="mys">
                                                            <span class="ptext fz-18 mb-15 d-block">
                                                                Bootstrap
                                                            </span>
                                                            <h1 class="fw-600">
                                                                97%
                                                            </h1>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--<< about personal >>-->

    <!--<< text slide v2 >>-->
    <div class="marquee-wrapper text-slider">
        <div class="marquee-inner to-right">
            <ul class="marqee-list d-flex">
                <li class="marquee-item">
                    <img src="home/img/banner/ts5.png" alt="text-p"> <span class="stroke-text"><img
                            src="{{ asset('home/img/banner/ts6.png') }}" alt="text-slide"></span>
                    <img src="{{ asset('home/img/banner/ts7.png') }}" alt="text-slide"> <span class="stroke-text"><img
                            src="{{ asset('home/img/banner/ts8.png') }}" alt="text-slide"></span>
                    <img src="{{ asset('home/img/banner/ts5.png') }}" alt="text-slide"> <span class="stroke-text"><img
                            src="{{ asset('home/img/banner/ts6.png') }}" alt="text-slide"></span>
                    <img src="{{ asset('home/img/banner/ts7.png') }}" alt="text-slide"> <span class="stroke-text"><img
                            src="{{ asset('home/img/banner/ts8.png') }}" alt="text-slide"></span>
                    <img src="{{ asset('home/img/banner/ts5.png') }}" alt="text-slide"> <span class="stroke-text"><img
                            src="{{ asset('home/img/banner/ts6.png') }}" alt="text-slide"></span>
                    <img src="{{ asset('home/img/banner/ts7.png') }}" alt="text-slide"> <span class="stroke-text"><img
                            src="{{ asset('home/img/banner/ts8.png') }}" alt="text-slide"></span>
                </li>
            </ul>
        </div>
    </div>
    <!--<< text slide v2 >>-->

    <!--<< our aword >>-->
    <div class="awoard__section">
        <div class="container">
            <div class="award__wraper table-responsive" data-aos="fade-up" data-aos-duration="2000">
                <table class="table w-100">
                    <tbody>
                        <tr>
                            <td>
                                <span class="table__title">
                                    Our Awards
                                </span>
                            </td>
                            <td class="cusnoe">

                            </td>
                            <td class="text-end">
                                <a href="index.html#0"
                                    class="d-flex table__view justify-content-end align-items-center base gap-2">
                                    <span>
                                        View My Work
                                    </span>
                                    <i class="bi bi-arrow-right"></i>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>Site Of The Day</td>
                            <td>Css & Animation</td>
                            <td class="text-end">2018</td>
                        </tr>
                        <tr>
                            <td>Best Business Model</td>
                            <td>New Strategy</td>
                            <td class="text-end">2019</td>
                        </tr>
                        <tr>
                            <td>Motion Graphic</td>
                            <td>3D & Visual Effect</td>
                            <td class="text-end">2020</td>
                        </tr>
                        <tr>
                            <td>Video Design</td>
                            <td>Css & Animation</td>
                            <td class="text-end">2022</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!--<< our aword >>-->

    <!--<< project one >>-->
    <section class="project__section pt-120 pb-120" id="prot">
        <div class="container">
            <div class="project__head text-center">
                <span class="common__sub" data-aos="fade-down" data-aos-duration="1000">
                    Projetos Completos
                </span>
                <h2 class="fw-500" data-aos="fade-down" data-aos-duration="2000">
                    Veja meu portfólio e me dê seu feedback
                </h2>
            </div>
            <div class="row g-4">
                <div class="col-lg-6 col-md-6">
                    <div class="project__wrapone">
                        <div class="project__item cus__mb60" data-aos="fade-up" data-aos-duration="1000">
                            <a href="{{ asset('home/img/project/pro1.png') }}" class="thumb mb-30 imgc">
                                <img src="{{ asset('home/img/project/pro1.png') }}" alt="img">
                            </a>
                            <div class="content d-flex align-items-center justify-content-between gap-2">
                                <a href="protfolio.html" class="left__cont">
                                    <span class="base mb-2 mb-xxl-3 d-block text-uppercase">
                                        Product Design
                                    </span>
                                    <h3>
                                        Brand Identity & Motion Design
                                    </h3>
                                </a>
                                <a href="{{ asset('home/img/project/pro1.png') }}" class="common__icon imgc">
                                    <i class="bi bi-arrow-up-right"></i>
                                </a>
                            </div>
                        </div>
                        <div class="project__item cus__mb60" data-aos="fade-up" data-aos-duration="1000">
                            <a href="{{ asset('home/img/project/pro3.png') }}" class="thumb mb-30 imgc">
                                <img src="{{ asset('home/img/project/pro3.png') }}" alt="img">
                            </a>
                            <div class="content d-flex align-items-center justify-content-between gap-2">
                                <a href="protfolio.html" class="left__cont">
                                    <span class="base mb-2 mb-xxl-3 d-block text-uppercase">
                                        Product Design
                                    </span>
                                    <h3>
                                        Design & Branding Mokeup
                                    </h3>
                                </a>
                                <a href="{{ asset('home/img/project/pro3.png') }}" class="common__icon imgc">
                                    <i class="bi bi-arrow-up-right"></i>
                                </a>
                            </div>
                        </div>
                        <div class="project__item" data-aos="fade-up" data-aos-duration="1000">
                            <a href="{{ asset('home/img/project/pro5.png') }}" class="thumb mb-30 imgc">
                                <img src="{{ asset('home/img/project/pro5.png') }}" alt="img">
                            </a>
                            <div class="content d-flex align-items-center justify-content-between gap-2">
                                <a href="protfolio.html" class="left__cont">
                                    <span class="base mb-2 mb-xxl-3 d-block text-uppercase">
                                        Ui/ux Design
                                    </span>
                                    <h3>
                                        Mobile Application Development
                                    </h3>
                                </a>
                                <a href="{{ asset('home/img/project/pro5.png') }}" class="common__icon imgc">
                                    <i class="bi bi-arrow-up-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="project__wraptwo">
                        <div class="project__item cus__mb60" data-aos="fade-up" data-aos-duration="2200">
                            <a href="{{ asset('home/img/project/pro2.png') }}" class="thumb mb-30 imgc">
                                <img src="{{ asset('home/img/project/pro2.png') }}" alt="img">
                            </a>
                            <div class="content d-flex align-items-center justify-content-between gap-2">
                                <a href="protfolio.html" class="left__cont">
                                    <span class="base mb-2 mb-xxl-3 d-block text-uppercase">
                                        Creative
                                    </span>
                                    <h3>
                                        Paper & Book Covers Design
                                    </h3>
                                </a>
                                <a href="{{ asset('home/img/project/pro2.png') }}" class="common__icon imgc">
                                    <i class="bi bi-arrow-up-right"></i>
                                </a>
                            </div>
                        </div>
                        <div class="project__item cus__mb60" data-aos="fade-up" data-aos-duration="2200">
                            <a href="{{ asset('home/img/project/pro4.png') }}" class="thumb mb-30 imgc">
                                <img src="{{ asset('home/img/project/pro4.png') }}" alt="img">
                            </a>
                            <div class="content d-flex align-items-center justify-content-between gap-2">
                                <a href="protfolio.html" class="left__cont">
                                    <span class="base mb-2 mb-xxl-3 d-block text-uppercase">
                                        Design & Branding
                                    </span>
                                    <h3>
                                        Creative Graphics Design
                                    </h3>
                                </a>
                                <a href="{{ asset('home/img/project/pro4.png') }}" class="common__icon imgc">
                                    <i class="bi bi-arrow-up-right"></i>
                                </a>
                            </div>
                        </div>
                        <div class="project__item" data-aos="fade-up" data-aos-duration="2200">
                            <a href="{{ asset('home/img/project/pro6.png') }}" class="thumb mb-30 imgc">
                                <img src="{{ asset('home/img/project/pro6.png') }}" alt="img">
                            </a>
                            <div class="content d-flex align-items-center justify-content-between gap-2">
                                <a href="protfolio.html" class="left__cont">
                                    <span class="base mb-2 mb-xxl-3 d-block text-uppercase">
                                        MOCKUP DESIGN
                                    </span>
                                    <h3>
                                        Brand Identity & Motion Design
                                    </h3>
                                </a>
                                <a href="{{ asset('home/img/project/pro6.png') }}" class="common__icon imgc">
                                    <i class="bi bi-arrow-up-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="custom__hover">
                <a href="protfolio-details.html" class="hover__circle mauto" data-aos="zoom-out-down"
                    data-aos-duration="2000">
                    <span class="box">
                        <i class="bi bi-arrow-up-right"></i>
                        <span class="textmore">
                            Click More Work
                        </span>
                    </span>
                </a>
            </div>
        </div>
    </section>
    <!--<< project one >>-->

    <!--<< project metting one >>-->
    <section class="project__metting overhid pt-120 pb-120">
        <div class="container">
            <div class="row g-4 align-items-center">
                <div class="col-lg-7">
                    <div class="pro__metting__content">
                        <div class="project__head">
                            <span class="common__sub" data-aos="fade-down" data-aos-duration="1000">
                                Need a Project?
                            </span>
                            <h2 class="fw-500" data-aos="fade-down" data-aos-duration="1600">
                                Let's work together. fixed
                                a meeting
                            </h2>
                        </div>
                        <div class="about__contbox__item pb-30" data-aos="fade-up" data-aos-duration="1000">
                            <span class="icon">
                                <i class="bi bi-envelope"></i>
                            </span>
                            <span class="box">
                                <span class="ptext fz-18 mb-1 d-block">
                                    Email
                                </span>
                                <a href="index.html#0">
                                    <span class="__cf_email__"
                                        data-cfemail="badedbccd3ded7dbced3dbc9898989faddd7dbd3d694d9d5d7">[email&#160;protected]</span>
                                </a>
                            </span>
                        </div>
                        <div class="about__contbox__item pb-30 pt-30" data-aos="fade-up" data-aos-duration="1500">
                            <span class="icon">
                                <i class="bi bi-geo-alt"></i>
                            </span>
                            <span class="box">
                                <span class="ptext fz-18 mb-1 d-block">
                                    Location
                                </span>
                                <a href="index.html#0">
                                    Victoria Street London, England
                                </a>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="pro__mettingthumb" data-aos="zoom-in" data-aos-duration="2000">
                        <img src="{{ asset('home/img/project/project-need.png') }}" alt="img">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--<< project metting one >>-->

    <!--<< service >>-->
    <section id="services" class="service__section overhid pt-120 pb-120">
        <div class="container">
            <div class="project__head text-center">
                <span class="common__sub" data-aos="fade-down" data-aos-duration="1000">
                    Services That i Provide
                </span>
                <h2 class="fw-500" data-aos="fade-up" data-aos-duration="1200">
                    My special service for your business
                    development
                </h2>
            </div>
            <div class="service__uniquewrap">
                <div class="service__unique__item pb-40 pt-40" data-aos="fade-up" data-aos-duration="1000">
                    <div class="left__service">
                        <div class="serial__adjust">
                            <span>
                                01
                            </span>
                            <div class="cont">
                                <h5>
                                    Designer
                                </h5>
                                <h2>
                                    <a href="service.html">
                                        Illustration Design
                                    </a>
                                </h2>
                            </div>
                        </div>
                        <p class="pra">
                            Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                            pariatur. sunt in culpa qui officia deserunt mollit
                        </p>
                    </div>
                    <a href="service.html" class="common__icon">
                        <i class="bi bi-arrow-up-right"></i>
                    </a>
                </div>
                <div class="service__unique__item pb-40 pt-40" data-aos="fade-up" data-aos-duration="1200">
                    <div class="left__service">
                        <div class="serial__adjust">
                            <span>
                                02
                            </span>
                            <div class="cont">
                                <h5>
                                    Branding
                                </h5>
                                <h2>
                                    <a href="service.html">
                                        Business Branding
                                    </a>
                                </h2>
                            </div>
                        </div>
                        <p class="pra">
                            Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                            pariatur. sunt in culpa qui officia deserunt mollit
                        </p>
                    </div>
                    <a href="service.html" class="common__icon">
                        <i class="bi bi-arrow-up-right"></i>
                    </a>
                </div>
                <div class="service__unique__item pb-40 pt-40" data-aos="fade-up" data-aos-duration="1400">
                    <div class="left__service">
                        <div class="serial__adjust">
                            <span>
                                03
                            </span>
                            <div class="cont">
                                <h5>
                                    UI/UX Design
                                </h5>
                                <h2>
                                    <a href="service.html">
                                        Web UI/UX Design
                                    </a>
                                </h2>
                            </div>
                        </div>
                        <p class="pra">
                            Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                            pariatur. sunt in culpa qui officia deserunt mollit
                        </p>
                    </div>
                    <a href="service.html" class="common__icon">
                        <i class="bi bi-arrow-up-right"></i>
                    </a>
                </div>
                <div class="service__unique__item pb-40 pt-40" data-aos="fade-up" data-aos-duration="1600">
                    <div class="left__service">
                        <div class="serial__adjust">
                            <span>
                                04
                            </span>
                            <div class="cont">
                                <h5>
                                    Web Design
                                </h5>
                                <h2>
                                    <a href="service.html">
                                        Application Design
                                    </a>
                                </h2>
                            </div>
                        </div>
                        <p class="pra">
                            Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                            pariatur. sunt in culpa qui officia deserunt mollit
                        </p>
                    </div>
                    <a href="service.html" class="common__icon">
                        <i class="bi bi-arrow-up-right"></i>
                    </a>
                </div>
                <div class="service__unique__item pb-40 pt-40" data-aos="fade-up" data-aos-duration="1800">
                    <div class="left__service">
                        <div class="serial__adjust">
                            <span>
                                05
                            </span>
                            <div class="cont">
                                <h5>
                                    SEO Analytics
                                </h5>
                                <h2>
                                    <a href="service.html">
                                        Digital Marketing
                                    </a>
                                </h2>
                            </div>
                        </div>
                        <p class="pra">
                            Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                            pariatur. sunt in culpa qui officia deserunt mollit
                        </p>
                    </div>
                    <a href="service.html" class="common__icon">
                        <i class="bi bi-arrow-up-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!--<< service >>-->

    <!--<< process >>-->
    <section class="process__section pt-120 pb-120">
        <div class="container">
            <div class="project__head text-center">
                <span class="common__sub" data-aos="fade-down" data-aos-duration="1000">
                    Processo de trabalho
                </span>
                <h2 class="fw-500" data-aos="fade-up" data-aos-duration="1000">
                    Your dream website in just
                    <span class="d-block">
                        few steps
                    </span>
                </h2>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6 col-sm-6" data-aos="flip-up" data-aos-duration="500">
                    <div class="process__item">
                        <h2 class="white mb-24">
                            Concept
                        </h2>
                        <p class="mb-30 pra fz-18">
                            Nemo enim ipsam voluptatem voluptas sit aspernatur aut odit aut fugit,
                        </p>
                        <ul>
                            <li>
                                Reviewing any existing branding
                            </li>
                            <li>
                                Target audience and competitors research
                            </li>
                            <li>
                                Developing a strategy
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6" data-aos="flip-up" data-aos-duration="500">
                    <div class="process__item">
                        <h2 class="white mb-24">
                            Design
                        </h2>
                        <p class="mb-30 pra fz-18">
                            Nemo enim ipsam voluptatem voluptas sit aspernatur aut odit aut fugit,
                        </p>
                        <ul>
                            <li>
                                Developing wireframes and mockup
                            </li>
                            <li>
                                Choosing typography, color palettes,
                            </li>
                            <li>
                                Refining the design
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6" data-aos="flip-up" data-aos-duration="500">
                    <div class="process__item">
                        <h2 class="white mb-24">
                            Webflow
                        </h2>
                        <p class="mb-30 pra fz-18">
                            Nemo enim ipsam voluptatem voluptas sit aspernatur aut odit aut fugit,
                        </p>
                        <ul>
                            <li>
                                Testing the website thoroughly launch
                            </li>
                            <li>
                                Choosing typography, color palettes,
                            </li>
                            <li>
                                Refining the design
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--<< process >>-->

    <!--<< testimonial >>-->
    <section class="testimonial__section pt-120 pb-120" id="testi">
        <div class="container">
            <div class="project__head text-center">
                <span class="common__sub" data-aos="fade-up" data-aos-duration="1000">
                    Testimonial
                </span>
                <h2 class="fw-500" data-aos="fade-down" data-aos-duration="1000">
                    Happy Words From Happy
                    <span class="d-block">
                        Customer
                    </span>
                </h2>
            </div>
            <div class="testimonial__v1wrap pb-120" data-aos="fade-up" data-aos-duration="1000">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="swiper testimonial__slidewrap">
                            <div class="swiper-wrapper">
                                <div class="test__slide swiper-slide">
                                    <div class="d-flex mb-40 align-items-center gap-2">
                                        <i class="bi bi-star-fill ratting fz-20"></i>
                                        <i class="bi bi-star-fill ratting fz-20"></i>
                                        <i class="bi bi-star-fill ratting fz-20"></i>
                                        <i class="bi bi-star-fill ratting fz-20"></i>
                                        <i class="bi bi-star-fill ratting fz-20"></i>
                                    </div>
                                    <p>
                                        There are many variations of passages of Lorem Ipsum available, by injected humour,
                                        or randomised words which don't look even slightly believable. If you are going to
                                        use a passage of Lorem Ipsum, you need to be hidden in middle of text. All the Lorem
                                        Ipsum generators
                                    </p>
                                    <h4 class="base mb-2">
                                        Shawn Beltran
                                    </h4>
                                    <span class="fz-18 ptext">
                                        Business Owner
                                    </span>
                                </div>
                                <div class="test__slide swiper-slide">
                                    <div class="d-flex mb-40 align-items-center gap-2">
                                        <i class="bi bi-star-fill ratting fz-20"></i>
                                        <i class="bi bi-star-fill ratting fz-20"></i>
                                        <i class="bi bi-star-fill ratting fz-20"></i>
                                        <i class="bi bi-star-fill ratting fz-20"></i>
                                        <i class="bi bi-star-fill ratting fz-20"></i>
                                    </div>
                                    <p>
                                        There are many variations of passages of Lorem Ipsum available, by injected humour,
                                        or randomised words which don't look even slightly believable. If you are going to
                                        use a passage of Lorem Ipsum, you need to be hidden in middle of text. All the Lorem
                                        Ipsum generators
                                    </p>
                                    <h4 class="base mb-2">
                                        John Methcel
                                    </h4>
                                    <span class="fz-18 ptext">
                                        Business Owner
                                    </span>
                                </div>
                                <div class="test__slide swiper-slide">
                                    <div class="d-flex mb-40 align-items-center gap-2">
                                        <i class="bi bi-star-fill ratting fz-20"></i>
                                        <i class="bi bi-star-fill ratting fz-20"></i>
                                        <i class="bi bi-star-fill ratting fz-20"></i>
                                        <i class="bi bi-star-fill ratting fz-20"></i>
                                        <i class="bi bi-star-fill ratting fz-20"></i>
                                    </div>
                                    <p>
                                        There are many variations of passages of Lorem Ipsum available, by injected humour,
                                        or randomised words which don't look even slightly believable. If you are going to
                                        use a passage of Lorem Ipsum, you need to be hidden in middle of text. All the Lorem
                                        Ipsum generators
                                    </p>
                                    <h4 class="base mb-2">
                                        Nethon Jr
                                    </h4>
                                    <span class="fz-18 ptext">
                                        Business Owner
                                    </span>
                                </div>
                            </div>
                            <div class="swiper-pagination3"></div>
                        </div>
                    </div>
                </div>
                <div class="quote">
                    <img src="{{ asset('home/img/testimonial/quote.png') }}" alt="img">
                </div>
                <div class="man1">
                    <img src="{{ asset('home/img/testimonial/man1.png"') }} alt="img">
                </div>
                <div class="man2">
                    <img src="{{ asset('home/img/testimonial/man3.png"') }} alt="img">
                </div>
                <div class="man3">
                    <img src="{{ asset('home/img/testimonial/man2.png"') }} alt="img">
                </div>
                <div class="test__shape">
                    <img src="{{ asset('home/img/testimonial/testi-arr') }}ow.png" alt="img">
                </div>
            </div>
            <div class="sponsor__area pt-120">
                <h4 class="sponsor__title" data-aos="fade-down" data-aos-duration="1000">
                    More than 100+ companies trusted us worldwide
                </h4>
                <div class="swiper sponsor__wrap">
                    <div class="swiper-wrapper">
                        <div class="sponsor__slide swiper-slide">
                            <img src="{{ asset('home/img/testimonial/partner1.png') }}" alt="img">
                        </div>
                        <div class="sponsor__slide swiper-slide">
                            <img src="{{ asset('home/img/testimonial/partner2.png') }}" alt="img">
                        </div>
                        <div class="sponsor__slide swiper-slide">
                            <img src="{{ asset('home/img/testimonial/partner3.png') }}" alt="img">
                        </div>
                        <div class="sponsor__slide swiper-slide">
                            <img src="{{ asset('home/img/testimonial/partner4.png') }}" alt="img">
                        </div>
                        <div class="sponsor__slide swiper-slide">
                            <img src="{{ asset('home/img/testimonial/partner6.png') }}" alt="img">
                        </div>
                        <div class="sponsor__slide swiper-slide">
                            <img src="{{ asset('home/img/testimonial/partner2.png') }}" alt="img">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--<< testimonial >>-->

    <!--<< blog >>-->
    <section class="blog__section overhid pt-120 pb-120">
        <div class="container">
            <div class="row g-4">
                <div class="col-xl-4 col-lg-3">
                    <div class="project__head">
                        <span class="common__sub" data-aos="fade-down" data-aos-duration="1000">
                            My Blogs
                        </span>
                        <h2 class="fw-500 mt-3" data-aos="fade-down" data-aos-duration="1500">
                            Recent Posts
                        </h2>
                        <div class="blog__hoverbox">
                            <a href="blog.html" class="hover__circle wow fadeInUp" data-wow-duration="1.6s">
                                <span class="box">
                                    <i class="bi bi-arrow-up-right"></i>
                                    <span class="textmore">
                                        Click More Work
                                    </span>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-8 col-lg-9">
                    <div class="blog__rightwrap">
                        <div class="service__uniquewrap">
                            <div class="service__unique__item pb-40 pt-40" data-aos="fade-up" data-aos-duration="1000">
                                <div class="left__service">
                                    <div class="serial__adjust">
                                        <div class="cont">
                                            <span class="dates">
                                                Sept 19, 2023
                                            </span>
                                            <h3>
                                                <a href="blog.html">
                                                    Brand design that helps
                                                    the company grow
                                                </a>
                                            </h3>
                                        </div>
                                    </div>
                                    <a href="{{ asset('home/img/blog/opa-blog.png') }}" class="opa__thumb imgc">
                                        <img src="{{ asset('home/img/blog/opa-blog.png') }}" alt="img-opa">
                                    </a>
                                </div>
                                <a href="{{ asset('home/img/blog/opa-blog.png') }}" class="common__icon imgc">
                                    <i class="bi bi-eye"></i>
                                </a>
                            </div>
                            <div class="service__unique__item pb-40 pt-40" data-aos="fade-up" data-aos-duration="1400">
                                <div class="left__service">
                                    <div class="serial__adjust">
                                        <div class="cont">
                                            <span class="dates">
                                                Sept 19, 2023
                                            </span>
                                            <h3>
                                                <a href="blog.html">
                                                    Brand design that helps
                                                    the company grow
                                                </a>
                                            </h3>
                                        </div>
                                    </div>
                                    <a href="{{ asset('home/img/blog/opa-blog.png') }}" class="opa__thumb imgc">
                                        <img src="{{ asset('home/img/blog/opa-blog.png') }}" alt="img-opa">
                                    </a>
                                </div>
                                <a href="{{ asset('home/img/blog/opa-blog.png') }}" class="common__icon imgc">
                                    <i class="bi bi-eye"></i>
                                </a>
                            </div>
                            <div class="service__unique__item pb-40 pt-40" data-aos="fade-up" data-aos-duration="1800">
                                <div class="left__service">
                                    <div class="serial__adjust">
                                        <div class="cont">
                                            <span class="dates">
                                                Sept 19, 2023
                                            </span>
                                            <h3>
                                                <a href="blog.html">
                                                    Brand design that helps
                                                    the company grow
                                                </a>
                                            </h3>
                                        </div>
                                    </div>
                                    <a href="{{ asset('home/img/blog/opa-blog.png') }}" class="opa__thumb imgc">
                                        <img src="{{ asset('home/img/blog/opa-blog.png') }}" alt="img-opa">
                                    </a>
                                </div>
                                <a href="{{ asset('home/img/blog/opa-blog.png') }}" class="common__icon imgc">
                                    <i class="bi bi-eye"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--<< blog >>-->

@endsection

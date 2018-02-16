@extends('layouts.blog.app')

@section('title', 'BLOG')

@include('layouts.blog.header')

@section('content')
<div class="content">
	<div class="content_resize">
		<div class="mainbar">
			<div class="article">
				<h2><span>Template</span> License</h2>
				<div class="clr"></div>
				<p><span class="date">Tanggal: <a href="#">16.03.2018</a></span> &nbsp;|&nbsp; Diposting oleh <a href="#">Admin</a></p>
				<a href="#" class="com">12</a> <img src="images/blog1.jpg" width="625" height="300" alt="" />
				<p>Deskripsi Postingan Blog</p>
				<p class="spec"><a href="#" class="rm">Baca Seterusnya &raquo;</a></p>
			</div>
			<div class="article">
				<h2><span>Office</span> interior</h2>
				<div class="clr"></div>
				<p><span class="date">Tanggal: <a href="#">15.03.2010</a></span> &nbsp;|&nbsp; Diposting oleh <a href="#">Anggota</a></p>
				<a href="#" class="com">7</a> <img src="images/blog2.jpg" width="625" height="300" alt="" />
				<p>Deskripsi Postingan Blog</p>
				<p class="spec"><a href="#" class="rm">Baca Seterusnya &raquo;</a></p>
			</div>
			<p class="pages"><small>Page 1 of 2 &nbsp;&nbsp;&nbsp;</small> <span>1</span> <a href="#">2</a> <a href="#">&raquo;</a></p>
		</div>
		<div class="sidebar">
			<div class="gadget">
				<h2 class="star"><span>Sidebar</span> Menu</h2>
				<div class="clr"></div>
				<ul class="sb_menu">
					<li><a href="#">Home</a></li>
					<li><a href="#">Semua Postingan</a></li>
					<li><a href="#">Tentang Kami</a></li>
				</ul>
			</div>
			<div class="gadget">
				<h2 class="star"><span>Arsip Blog</span></h2>
				<div class="clr"></div>
				<ul class="sb_menu">
					<li><a href="#">2015</a></li>
					<li><a href="#">2016</a></li>
					<li><a href="#">2017</a></li>
				</ul>
			</div>
			<div class="gadget">
				<h2 class="star"><span>Kontak Kami</span></h2>
				<div class="clr"></div>
				<p>SSL Kontak</p>
			</div>
		</div>
		<div class="clr"></div>
	</div>
</div>
@include('layouts.blog.footer')
@endsection
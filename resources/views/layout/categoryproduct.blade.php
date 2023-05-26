<style>
* {
    padding: 0;
    margin: 0;
    border: none;
}
		body {
	margin: 0;
	padding: 0;
	background: #642B73;  /* fallback for old browsers */
	background: -webkit-linear-gradient(to right, #C6426E, #642B73);  /* Chrome 10-25, Safari 5.1-6 */
	background: linear-gradient(to right, #C6426E, #642B73); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
	font-family: spotify-circular,Helvetica Neue,Helvetica,Arial,Hiragino Kaku Gothic Pro,Meiryo,MS Gothic,sans-serif;
}
.wrapper {
	margin-top: 50px;
}
.wrapper_section_2 {
	margin-top: 10px;
}
.wrapper h1 {
	color: #fff;
	text-align: center;
	font-weight: bold;
}
.cards {
	display: flex;
	flex-wrap: wrap;
	flex-direction: row;
	justify-content: center;
}
.card {
	width: 190px;
	height: 180px;
	margin: 15px;
	position: relative;
	min-width: 190px;
	background: #000;
}
.card:hover .overlayer {
	visibility: visible;
}
.card img {
	width: 100%;
	height: 100%;
}
.card .title  {
	width: 100%;
	height: 30px;
	text-align: center;
	margin-top: 180px;
}

.card .title a {
	top: -175px;
	color: #fff;
	position: relative;
	font-size: 13px;
	text-decoration: none;
}

.card .overlayer {
	top: 0;
	right: 0;
	width: 100%;
	height: 100%;
	position: absolute;
	background: rgba(0,0,0,0.6);
	text-align: center;
	visibility: hidden;
}

.overlayer .fa-play-circle {
	color: #fff;
	font-size: 73px;
	margin-top: 53px;
	transition: 100ms ease-in-out;
}
.fa-play-circle:hover {
	transform: scale(1.1);
}






	</style>

<body>
    <div class="wrapper">
        <h1>List Song</h1>
        @foreach($products->chunk(7) as $productChunk)
        <div class="cards" style="margin-top: 120px;">
                @foreach($productChunk as $product)
                    <div class="card">
                        <div class="overlayer">
                            <i class="far fa-play-circle"></i>
                        </div>
                        <img src="{{ asset('image/product/'.$product->image) }}" alt="">
                        <br>
                        <br>
                        <audio controls="" id="song" style="width: 190px;">
                            <source src="{{ asset('audio/product/'.$product->audio) }}" type="audio/mpeg">
                        </audio>
                        <div class="title">
                            <a href="#">Name Song : {{ $product->name }}</a>
                            <br>
                            <a href="#">Singer : {{ $product->singer }}</a>
                        </div>
                    </div>
                @endforeach
            </div>
        @endforeach
    </div>

		<!-- <div class="card">
			<div class="overlayer">
				<i class="far fa-play-circle"></i>
			</div>
			<img src="https://altwall.net/img/albums/adb1c0cbab29b842b28e6aa1e8e57f47_2013.jpg" alt="">
			<div class="title">
				<a href="#">Hover over</a>
			</div>
		</div>

		<div class="card">
			<div class="overlayer">
				<i class="far fa-play-circle"></i>
			</div>
			<img src="https://is4-ssl.mzstatic.com/image/thumb/Music7/v4/4b/06/29/4b062955-ecce-e362-78f1-025f18eed20a/source/1200x1200bb.jpg" alt="">
			<div class="title">
				<a href="#">Hover over</a>
			</div>
		</div>

		<div class="card">
			<div class="overlayer">
				<i class="far fa-play-circle"></i>
			</div>
			<img src="https://media1.popsugar-assets.com/files/thumbor/L-VT9k0GKckWWnpo3n2YBq4f9tE/fit-in/1024x1024/filters:format_auto-!!-:strip_icc-!!-/2017/08/03/846/n/37139775/2d0d134e5983773fe90560.65157921_edit_img_image_17921777_1501786115/i/Camila-Cabello-Havana-Song.jpg" alt="">
			<div class="title">
				<a href="#">Hover over</a>
			</div>
		</div>
	</div>

	<div class="wrapper_section_2">
	<div class="cards">

		<div class="card">
			<div class="overlayer">
				<i class="far fa-play-circle"></i>
			</div>
			<img src="http://www.naomishow.com/wp-content/uploads/buy-cd-covers-63-best-cd-cover-artwork-templates-images-on-pinterest-2.jpg" alt="">
			<div class="title">
				<a href="#">Hover over</a>
			</div>
		</div>

		<div class="card">
			<div class="overlayer">
				<i class="far fa-play-circle"></i>
			</div>
			<img src="https://i.pinimg.com/736x/cf/74/03/cf74032199d378808402329b3765ac72--music-albums-in-color.jpg" alt="">
			<div class="title">
				<a href="#">Hover over</a>
			</div>
		</div>

		<div class="card">
			<div class="overlayer">
				<i class="far fa-play-circle"></i>
			</div>
			<img src="https://i.pinimg.com/736x/ed/b1/10/edb1100257bb6d0ceee624696d9c9f1f--cover-art-album-covers.jpg" alt="">
			<div class="title">
				<a href="#">Hover over</a>
			</div>
		</div>

		<div class="card">
			<div class="overlayer">
				<i class="far fa-play-circle"></i>
			</div>
			<img src="https://i.pinimg.com/736x/00/a1/3c/00a13cf897548091f4042cba761ef00d--cd-cover-dance-music.jpg" alt="">
			<div class="title">
				<a href="#">Hover over</a>
			</div>
		</div>	 -->

	{{-- </div>
</div> --}}

<?php 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Category</title>
    <style>
        *{
			padding: 0;
			margin: 0;
			box-sizing: border-box;
			font-family: -webkit-pictograph;
		}
		main{
			width: 100%;
			height: 840px;
			/*background: red;*/
			margin: 10px auto;
			position: relative;
			padding: 5px 0;
		}
		main .text{
			padding: 10px;
			text-align: center;
			/*font-size: 30px;*/
			color: #554;
		}
		.text h1{
			font-size: 50px;
		}
		.text p{
			width: 60%;
			padding: 5px;
			margin: auto;
			line-height: 30px;
		}
		main header{
			width: 98%;
			height: 60px;
			margin: 0 auto;
			/*background: gray;*/
			display: flex;
			align-items: center;
			padding: 20px;
			justify-content: space-between;
			border-bottom: 2px solid #ddd;
		}
		header p span{
			font-size: 40px;
		    margin: 0 5px;
		    cursor: pointer;
		    color: #555;
		     width: 30px;
		    height: 30px;
		    display: inline-block;
		    line-height: 19px;
		    text-align: center;
		    border-radius: 3px;
		}
		header p span:hover{
			background: #222;
    		color: white;
		}
		section{
			width: 98%;
			height: 600px;
			/*background: red;*/
			margin: auto;
			display: flex;
			align-items: center;
			overflow-x: auto;
		}
		section::-webkit-scrollbar{
			display: none;
		}
		section .product{
			min-width: 24%;
			height: 90%;
			background: whitesmoke;
			margin:  0 20px  0 0;
			border-radius: 20px;
			position: relative;
			left: 0;
			transition: 0.5s;

		}
		picture{
			width: 100%;
			height: 70%;
			padding: 20px;
			/*background: green;*/
			display: flex;
			overflow: hidden;
			margin-bottom: 20px;
		}
		picture img{
			width: 100%;
		}
		.detail,
		.button{
			width: 90%;
			/*background: red;*/
			margin: auto;
			padding: 5px;
			display: flex;
			justify-content: space-between;
			align-items: center;
			height: 50px;
			font-size: 20px;
			color: #444;
		}
		small{color: #555;}
		a{
			text-decoration: none;
			padding: 6px 14px;
		    font-size: 15px;
		    margin: 5px 0 0 20px;
		    display: inline-block;
		    background: #6773ff;
		    color: white;
		}
		p.star{
			margin: 5px auto;
		    width: 65%;
		    font-size: 25px;
		    color: #808080;
		}
		@media (max-width: 768px) {
			.text h1{
				font-size: 35px;
			}
			.text p{
				width: 90%;
			}
			header h1{
				font-size: 25px;
			}
			header p span{
				font-size: 30px;
			}
			section .product {
				min-width: 49%;
				margin:  0 10px  0 0;
			}
			.detail, .button{
				font-size: 16px;
			}
			a{
				padding: 6px 10px;
			}
		}
		</style>
</head>
<body>
    <main>
         <div class="text">
            <h1>Simple Single Carousel</h1>
            <p>
                “Becoming accredited and maintaining it takes hard work on the part of faculty, staff, administration, and
                 parents. I believe having the parents involved gives the accreditation process more meaning to the local
                 community,” says Ochieng. Students are a help, also, according to Clive Davis, assistant superintendent for
                 curriculum. “We have seen our students score higher in national and state proficiency exams for the past three years. We can attribute that to direct parental involvement in the child’s studies.”

            </p>
        </div>
       
        <header>
            <h1>Top Hottest Product</h1>
            <p><img src="../image/Product-1.png" alt="">
                </picture>
                <div class="details">
                    <p>
                        <b>Product One</b>
                        <small>New Arrival</small>
                    </p>
                    <samp>ksh.4500/=</samp>
                </div>
                <div class="button">
                    <p class="star">
                    <strong>&star;</strong>
                    <strong>&star;</strong>
                    <strong>&star;</strong>
                    <strong>&star;</strong>
                    <strong>&star;</strong>    
                    </p>
                    <a href="#">Add-cart</a>
                </div>
            </div>

            <div class="product">
                <picture>
                    <img src="../image/Product-2.png" alt="">
                </picture>
                <div class="details">
                    <p>
                        <b>Product Two</b>
                        <small>New Arrival</small>
                    </p>
                    <samp>ksh.4500/=</samp>
                </div>
                <div class="button">
                    <p class="star">
                    <strong>&star;</strong>
                    <strong>&star;</strong>
                    <strong>&star;</strong>
                    <strong>&star;</strong>
                    <strong>&star;</strong>    
                    </p>
                    <a href="#">Add-cart</a>
                </div>
            </div>

            <div class="product">
                <picture>
                    <img src="../image/Product-3.png" alt="">
                </picture>
                <div class="details">
                    <p>
                        <b>Product Three</b>
                        <small>New Arrival</small>
                    </p>
                    <samp>ksh.4500/=</samp>
                </div>
                <div class="button">
                    <p class="star">
                    <strong>&star;</strong>
                    <strong>&star;</strong>
                    <strong>&star;</strong>
                    <strong>&star;</strong>
                    <strong>&star;</strong>    
                    </p>
                    <a href="#">Add-cart</a>
                </div>
            </div>

            <div class="product">
                <picture>
                    <img src="../image/Product-4.png" alt="">
                </picture>
                <div class="details">
                    <p>
                        <b>Product Four</b>
                        <small>New Arrival</small>
                    </p>
                    <samp>ksh.4500/=</samp>
                </div>
                <div class="button">
                    <p class="star">
                    <strong>&star;</strong>
                    <strong>&star;</strong>
                    <strong>&star;</strong>
                    <strong>&star;</strong>  
                    <strong>&star;</strong>  
                    </p>
                    <a href="#">Add-cart</a>
                </div>
            </div>

            <div class="product">
                <picture>
                    <img src="../image/Product-5.png" alt="">
                </picture>
                <div class="details">
                    <p>
                        <b>Product Five</b>
                        <small>New Arrival</small>
                    </p>
                    <samp>ksh.4500/=</samp>
                </div>
                <div class="button">
                    <p class="star">
                    <strong>&star;</strong>
                    <strong>&star;</strong>
                    <strong>&star;</strong>
                    <strong>&star;</strong>  
                    <strong>&star;</strong>  
                    </p>
                    <a href="#">Add-cart</a>
                </div>
            </div>

            <div class="product">
                <picture>
                    <img src="../image/Product-6.png" alt="">
                </picture>
                <div class="details">
                    <p>
                        <b>Product Six</b>
                        <small>New Arrival</small>
                    </p>
                    <samp>ksh.4500/=</samp>
                </div>
                <div class="button">
                    <p class="star">
                    <strong>&star;</strong>
                    <strong>&star;</strong>
                    <strong>&star;</strong>
                    <strong>&star;</strong> 
                    <strong>&star;</strong>   
                    </p>
                    <a href="#">Add-cart</a>
                </div>
            </div>

            <div class="product">
                <picture>
                    <img src="../image/Product-7.png" alt="">
                </picture>
                <div class="details">
                    <p>
                        <b>Product Seven</b>
                        <small>New Arrival</small>
                    </p>
                    <samp>ksh.4500/=</samp>
                </div>
                <div class="button">
                    <p class="star">
                    <strong>&star;</strong>
                    <strong>&star;</strong>
                    <strong>&star;</strong>
                    <strong>&star;</strong>  
                    <strong>&star;</strong>  
                    </p>
                    <a href="#">Add-cart</a>
                </div>
            </div>

            <div class="product">
                <picture>
                    <img src="../image/Product-8.png" alt="">
                </picture>
                <div class="details">
                    <p>
                        <b>Product Eight</b>
                        <small>New Arrival</small>
                    </p>
                    <samp>ksh.4500/=</samp>
                </div>
                <div class="button">
                    <p class="star">
                    <strong>&star;</strong>
                    <strong>&star;</strong>
                    <strong>&star;</strong>
                    <strong>&star;</strong> 
                    <strong>&star;</strong>   
                    </p>
                    <a href="#">Add-cart</a>
                </div>
            </div>
        </section>
    </main>
</body>
<script src="../js/main.js"></script>
</html>
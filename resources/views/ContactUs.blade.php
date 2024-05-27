<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <x-Header/>
<div class="bg-red-100 h-screen">
		<div class="h-full md:flex">
			<div class="flex md:w-7/12 justify-center py-10 items-center bg-white h-full">
				<div class="bg-white w-10/12 p-5 rounded-lg flex justify-center"
					style="box-shadow: 2px 2px rgb(0 0 0 / 0.15);">
					<form class="bg-white md:p-5 w-full md:w-10/12 ">
						<h1 class="text-gray-800 font-bold text-2xl mb-1 text-center">Contact Us</h1>
						<p class="text-sm font-normal text-gray-600 mb-5">feel free to contact us anytime.we will get
							back to you as soon as we can!</p>
						<div class="my-2">
							<div>
								<label class="block text-gray-700">Full name</label>
								<input type="text" name="" id="" placeholder="Enter Full name"
									class="w-full px-4 py-2 rounded-lg bg-gray-200 mt-2 border focus:border-blue-500 focus:bg-white focus:outline-none"
									autofocus autocomplete required>
							</div>
						</div>
						<div class="my-2">
							<div>
								<label class="block text-gray-700">Email or phone number</label>
								<input type="text" name="" id="" placeholder="Enter Email or phone number"
									class="w-full px-4 py-2 rounded-lg bg-gray-200 mt-2 border focus:border-blue-500 focus:bg-white focus:outline-none"
									autofocus autocomplete required>
							</div>
						</div>
						<div class="my-2">
							<div>
								<label class="block text-gray-700">Message</label>
								<textarea type="text" name="" id="" placeholder="Enter Message"
									class="w-full px-4 py-2 rounded-lg bg-gray-200 mt-2 border focus:border-blue-500 focus:bg-white focus:outline-none max-h-16"
									autofocus autocomplete required></textarea>
							</div>
						</div>
						<button type="submit"
							class="block w-full bg-indigo-600 mt-4 py-2 rounded-2xl text-white font-semibold mb-2">Send</button>
					</form>
				</div>
			</div>
			<div class="w-5/12 relative bg-white box-border hidden md:block h-full">
				<div class="absolute md:w-1/2 lg:w-5/12  right-0 top-0 h-full shadow bg-blue-300 flex items-end py-2">
					<div class="flex justify-evenly w-full">
						<svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
							<g clip-path="url(#clip0_286_2229)">
								<path
									d="M15 0C6.7158 0 0 6.7158 0 15C0 22.0344 4.8432 27.9372 11.3766 29.5584V19.584H8.2836V15H11.3766V13.0248C11.3766 7.9194 13.6872 5.553 18.6996 5.553C19.65 5.553 21.2898 5.7396 21.9606 5.9256V10.0806C21.6066 10.0434 20.9916 10.0248 20.2278 10.0248C17.7684 10.0248 16.818 10.9566 16.818 13.3788V15H21.7176L20.8758 19.584H16.818V29.8902C24.2454 28.9932 30.0006 22.6692 30.0006 15C30 6.7158 23.2842 0 15 0Z"
									fill="black" />
							</g>
							<defs>
								<clipPath id="clip0_286_2229">
									<rect width="30" height="30" fill="white" />
								</clipPath>
							</defs>
						</svg>
						<svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
							<g clip-path="url(#clip0_286_2234)">
								<path
									d="M15 2.70117C19.0078 2.70117 19.4824 2.71875 21.0586 2.78906C22.5234 2.85352 23.3145 3.09961 23.8418 3.30469C24.5391 3.57422 25.043 3.90234 25.5645 4.42383C26.0918 4.95117 26.4141 5.44922 26.6836 6.14648C26.8887 6.67383 27.1348 7.4707 27.1992 8.92969C27.2695 10.5117 27.2871 10.9863 27.2871 14.9883C27.2871 18.9961 27.2695 19.4707 27.1992 21.0469C27.1348 22.5117 26.8887 23.3027 26.6836 23.8301C26.4141 24.5273 26.0859 25.0313 25.5645 25.5527C25.0371 26.0801 24.5391 26.4023 23.8418 26.6719C23.3145 26.877 22.5176 27.123 21.0586 27.1875C19.4766 27.2578 19.002 27.2754 15 27.2754C10.9922 27.2754 10.5176 27.2578 8.94141 27.1875C7.47656 27.123 6.68555 26.877 6.1582 26.6719C5.46094 26.4023 4.95703 26.0742 4.43555 25.5527C3.9082 25.0254 3.58594 24.5273 3.31641 23.8301C3.11133 23.3027 2.86523 22.5059 2.80078 21.0469C2.73047 19.4648 2.71289 18.9902 2.71289 14.9883C2.71289 10.9805 2.73047 10.5059 2.80078 8.92969C2.86523 7.46484 3.11133 6.67383 3.31641 6.14648C3.58594 5.44922 3.91406 4.94531 4.43555 4.42383C4.96289 3.89648 5.46094 3.57422 6.1582 3.30469C6.68555 3.09961 7.48242 2.85352 8.94141 2.78906C10.5176 2.71875 10.9922 2.70117 15 2.70117ZM15 0C10.9277 0 10.418 0.0175781 8.81836 0.0878906C7.22461 0.158203 6.12891 0.416016 5.17969 0.785156C4.18945 1.17187 3.35156 1.68164 2.51953 2.51953C1.68164 3.35156 1.17188 4.18945 0.785156 5.17383C0.416016 6.12891 0.158203 7.21875 0.0878906 8.8125C0.0175781 10.418 0 10.9277 0 15C0 19.0723 0.0175781 19.582 0.0878906 21.1816C0.158203 22.7754 0.416016 23.8711 0.785156 24.8203C1.17188 25.8105 1.68164 26.6484 2.51953 27.4805C3.35156 28.3125 4.18945 28.8281 5.17383 29.209C6.12891 29.5781 7.21875 29.8359 8.8125 29.9062C10.4121 29.9766 10.9219 29.9941 14.9941 29.9941C19.0664 29.9941 19.5762 29.9766 21.1758 29.9062C22.7695 29.8359 23.8652 29.5781 24.8145 29.209C25.7988 28.8281 26.6367 28.3125 27.4688 27.4805C28.3008 26.6484 28.8164 25.8105 29.1973 24.8262C29.5664 23.8711 29.8242 22.7813 29.8945 21.1875C29.9648 19.5879 29.9824 19.0781 29.9824 15.0059C29.9824 10.9336 29.9648 10.4238 29.8945 8.82422C29.8242 7.23047 29.5664 6.13477 29.1973 5.18555C28.8281 4.18945 28.3184 3.35156 27.4805 2.51953C26.6484 1.6875 25.8105 1.17188 24.8262 0.791016C23.8711 0.421875 22.7813 0.164063 21.1875 0.09375C19.582 0.0175781 19.0723 0 15 0Z"
									fill="black" />
								<path
									d="M15 7.29492C10.7461 7.29492 7.29492 10.7461 7.29492 15C7.29492 19.2539 10.7461 22.7051 15 22.7051C19.2539 22.7051 22.7051 19.2539 22.7051 15C22.7051 10.7461 19.2539 7.29492 15 7.29492ZM15 19.998C12.2402 19.998 10.002 17.7598 10.002 15C10.002 12.2402 12.2402 10.002 15 10.002C17.7598 10.002 19.998 12.2402 19.998 15C19.998 17.7598 17.7598 19.998 15 19.998Z"
									fill="black" />
								<path
									d="M24.8086 6.99024C24.8086 7.98633 24 8.78907 23.0098 8.78907C22.0137 8.78907 21.2109 7.98047 21.2109 6.99024C21.2109 5.99414 22.0195 5.19141 23.0098 5.19141C24 5.19141 24.8086 6 24.8086 6.99024Z"
									fill="black" />
							</g>
							<defs>
								<clipPath id="clip0_286_2234">
									<rect width="30" height="30" fill="white" />
								</clipPath>
							</defs>
						</svg>
						<svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path
								d="M22.9079 2.37988H27.1247L17.9121 12.9092L28.75 27.2373H20.264L13.6175 18.5474L6.01243 27.2373H1.79304L11.6468 15.975L1.25 2.37988H9.95139L15.9592 10.3228L22.9079 2.37988ZM21.4279 24.7134H23.7645L8.68174 4.7713H6.17433L21.4279 24.7134Z"
								fill="black" />
						</svg>
						<svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path
								d="M0 29.9999L2.10875 22.2962C0.807498 20.0412 0.12375 17.485 0.125 14.8637C0.12875 6.66873 6.79749 0 14.9912 0C18.9675 0.00125 22.7 1.55 25.5074 4.35999C28.3137 7.16998 29.8587 10.905 29.8574 14.8775C29.8537 23.0737 23.1849 29.7424 14.9912 29.7424C12.5037 29.7412 10.0525 29.1174 7.88123 27.9324L0 29.9999ZM8.24623 25.2412C10.3412 26.4849 12.3412 27.2299 14.9862 27.2312C21.7962 27.2312 27.3437 21.6887 27.3474 14.875C27.3499 8.04748 21.8287 2.51249 14.9962 2.50999C8.18123 2.50999 2.63749 8.05248 2.63499 14.865C2.63374 17.6462 3.44874 19.7287 4.81749 21.9075L3.56874 26.4674L8.24623 25.2412ZM22.48 18.4112C22.3875 18.2562 22.14 18.1637 21.7675 17.9775C21.3962 17.7912 19.57 16.8925 19.2287 16.7687C18.8887 16.645 18.6412 16.5825 18.3925 16.955C18.145 17.3262 17.4325 18.1637 17.2162 18.4112C17 18.6587 16.7825 18.69 16.4112 18.5037C16.04 18.3175 14.8425 17.9262 13.4237 16.66C12.32 15.675 11.5737 14.4587 11.3575 14.0862C11.1412 13.715 11.335 13.5137 11.52 13.3287C11.6875 13.1625 11.8912 12.895 12.0775 12.6775C12.2662 12.4625 12.3275 12.3075 12.4525 12.0587C12.5762 11.8112 12.515 11.5937 12.4212 11.4075C12.3275 11.2225 11.585 9.39373 11.2762 8.64998C10.9737 7.92623 10.6675 8.02373 10.44 8.01248L9.72748 7.99998C9.47998 7.99998 9.07748 8.09248 8.73748 8.46498C8.39748 8.83748 7.43748 9.73498 7.43748 11.5637C7.43748 13.3925 8.76873 15.1587 8.95373 15.4062C9.13998 15.6537 11.5725 19.4062 15.2987 21.015C16.185 21.3975 16.8775 21.6262 17.4162 21.7975C18.3062 22.08 19.1162 22.04 19.7562 21.945C20.47 21.8387 21.9537 21.0462 22.2637 20.1787C22.5737 19.31 22.5737 18.5662 22.48 18.4112Z"
								fill="black" />
						</svg>
					</div>
				</div>
				<div class="absolute w-11/12 h-3/4  rounded-l-xl right-0 shadow bg-white p-5 "
					style="top:12.5%;box-shadow: -2px 2px rgb(0 0 0 / 0.15);">
					<h1 class="text-2xl font-bold">Info</h1>
					<div>

					</div>
				</div>

			</div>
		</div>
	</div>
</body>
<script src="{{ asset('js/HeaderResposive.js') }}"></script>
</html>

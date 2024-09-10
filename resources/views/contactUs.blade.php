@extends('layout.app')

@section('content')
<div class="lg:max-w-7xl lg:mx-auto py-24 grid grid-cols-1 md:grid-cols-2 gap-12">
    <div class="">
        <h3 class="text-3xl font-semibold pb-2">Get In Touch</h3>
        <span class="text-primary text-xl">Ask us anything or just say hi...</span>
        <p class="py-4">Please get in touch with us, we are provide fresh and healthy food.</p>
        <div class="flex flex-col gap-1">
            <a href="#"><i class="fa-solid fa-phone"></i> +91-1234656789</a>
            <a href="#"><i class="fa-regular fa-envelope"></i> treact24@gmail.com</a>
        </div>
    </div>
    <div class="">
        <h2 class="text-3xl font-medium">Connect Us</h2>
        <form action="">
            <div class="grid grid-cols-1 md:grid-cols-2  gap-3 pt-4">
                <div class="flex flex-col">
                    <label>Name<sup class="text-red-500">*</sup></label>
                    <input type="text" class="border-gray-200 hover:border-primary border-2 mt-2 py-1 px-2">
                </div>
                <div class="flex flex-col">
                    <label>Email address<sup class="text-red-500">*</sup></label>
                    <input type="text" class="border-gray-200 hover:border-primary border-2 mt-2 py-1 px-2">
                </div>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-3 pt-4">
                <div class="flex flex-col">
                    <label>Phone<sup class="text-red-500">*</sup></label>
                    <input type="text" class="border-gray-200 hover:border-primary border-2 mt-2 py-1 px-2">
                </div>
                <div class="flex flex-col">
                    <label>Subject<sup class="text-red-500">*</sup></label>
                    <input type="text" class="border-gray-200 hover:border-primary border-2 mt-2 py-1 px-2">
                </div>
            </div>
            <div class="flex flex-col pt-4">
                <label>Message</label>
                <textarea class="border-gray-200 hover:border-primary border-2 mt-2 py-1 px-2"></textarea>
            </div>
            <div class="text-center">
                <input type="submit" value="Submit" class="mt-4 tracking-wide py-2.5 px-8 bg-primary hover:bg-primary-focus text-white rounded transition ease-in-out duration-500 cursor-pointer">
            </div>
        </form>
    </div>
</div>
@endsection
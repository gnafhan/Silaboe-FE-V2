@extends('layouts.AdminLayouts')
@section('content')
    <section class="flex-1 lg:mx-20 mx-12 my-2 flex-col flex lg:gap-4 md:gap-4 gap-16">







        <div class="flex flex-col mt-12 ">
            <div class="font-bold text-xl lg:text-2xl flex mb-4">Laboratorium HU104</div>
            <img src="{{ asset('image/fotolab.png') }}" class="h-[50%] rounded-xl grid" alt="foto lab" />
            <div class="text-sm lg:text-xl text-black text-justify lg:py-12 py-6">lorem Lorem ipsum dolor sit amet
                consectetur adipisicing elit. Aut saepe tempore ipsum, provident, excepturi culpa exercitationem omnis ex
                deserunt iusto officia alias doloremque! Tenetur placeat debitis ex veritatis labore accusantium. lorem
                lorem lorem Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut saepe tempore ipsum, provident,
                excepturi culpa exercitationem omnis ex deserunt iusto officia alias doloremque! Tenetur placeat debitis ex
                veritatis labore accusantium. lorem lorem Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur
                obcaecati excepturi, tempore vel reprehenderit sequi itaque nihil dolorum. Illum, sed alias quidem harum
                esse mollitia, dolor veniam a sequi reprehenderit facere rem. Dignissimos minus totam neque suscipit eum
                autem adipisci animi aperiam, officia nulla recusandae cupiditate eos reprehenderit blanditiis? Deserunt
                iste perspiciatis nesciunt obcaecati, nam dolorem. Minima aperiam laboriosam, distinctio consequuntur dicta
                doloribus possimus quos maxime, dignissimos corporis labore consequatur. Consequuntur vitae eveniet,
                officiis, atque vero dolorum facere facilis aliquid officia animi inventore. Odio alias accusantium
                blanditiis quo saepe libero animi deleniti quod doloremque illo incidunt nulla, est ipsum corporis iure eos
                quia molestiae. Perspiciatis voluptatibus asperiores distinctio alias aliquam. Explicabo nemo veniam
                eligendi expedita. Iure illo explicabo autem. Unde dolorem quibusdam non incidunt maxime labore iusto amet
                nobis veritatis earum pariatur provident recusandae quisquam expedita quaerat eligendi, architecto
                laboriosam cum ullam repellat. Id praesentium voluptatem consectetur modi, unde rerum sit dolore </div>
            {{-- 
                Bagian Rendering  --}}

            <div class="lg:text-xl text-lg font-bold text-[#628F8E] mb-4">Support : </div>
            <div class="flex flex-row gap-4 mb-8 ">
                <button class=" bg-[#628F8E] lg:text-lg  text-sm  text-white lg:px-8 lg:py-2 py-2 px-6 rounded-md">Rendering
                </button>
                <button class=" bg-[#628F8E] lg:text-lg  text-sm  text-white lg:px-8 lg:py-2 py-2 px-6 rounded-md">Rendering
                </button>
                <button class=" bg-[#628F8E] lg:text-lg  text-sm  text-white lg:px-8 lg:py-2 py-2 px-6 rounded-md">Rendering
                </button>
            </div>

            {{-- bagian Button bawah  --}}
            <div class="flex  md:flex-row md:items-center justify-start gap-4 py-4">
                <div
                    class="flex flex-row gap-4  items-center bg-[#628F8E] px-6 py-2 rounded-md hover:bg-[#608B8A] shadow-md justify-center md:w-auto">
                    <svg width="9" height="17" viewBox="0 0 9 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M8.27669 15.6804L1.74475 9.04361C1.60149 8.8988 1.52114 8.70333 1.52114 8.49964C1.52114 8.29594 1.60149 8.10047 1.74475 7.95566L8.27527 1.31889C8.41846 1.17319 8.49869 0.977077 8.49869 0.772795C8.49869 0.568512 8.41846 0.3724 8.27527 0.226696C8.20532 0.154947 8.12172 0.0979252 8.02939 0.0589924C7.93706 0.0200596 7.83787 0 7.73767 0C7.63747 0 7.53828 0.0200596 7.44595 0.0589924C7.35362 0.0979252 7.27002 0.154947 7.20007 0.226696L0.669549 6.86205C0.240424 7.2991 0 7.88713 0 8.49964C0 9.11214 0.240424 9.70017 0.669549 10.1372L7.20007 16.7726C7.27004 16.8445 7.35373 16.9017 7.44619 16.9408C7.53865 16.9799 7.63801 17 7.73838 17C7.83875 17 7.93811 16.9799 8.03057 16.9408C8.12303 16.9017 8.20672 16.8445 8.27669 16.7726C8.41987 16.6269 8.5001 16.4308 8.5001 16.2265C8.5001 16.0222 8.41987 15.8261 8.27669 15.6804Z"
                            fill="#FCFCFC" />
                    </svg>
                    <button class="font-medium text-md lg:text-lg text-white flex items-center">
                        Kembali
                    </button>
                </div>


            </div>
        </div>




    </section>
@endsection

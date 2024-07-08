@include('partials.header')

<div id="main-cont-vg" class="font-poppins p-4 tabletm:ml-56">
    <div id="main-cont-wrapper" class="p-4 border-2 border-gray-100 border-dashed rounded-lg">
        <h1 class="text-2xl tablet:text-3xl font-semibold text-curious-blue-600">Visual Gallery</h1>
        <p class="font-light mb-4  text-sm text-curious-blue-600">A helper for your visual needs</p>

        <div class="grid grid-cols-1 tablet:grid-cols-2 laptops:grid-cols-3 gap-2 tabletm:gap-4 desktops:gap-8 desktopm:gap-10 place-items-center">
            <div class="relative max-w-sm desktops:max-w-lg bg-white border border-gray-200 rounded-lg shadow-md h-[31rem] laptops:h-[30rem]">
                <h5 class="text-2xl font-bold tracking-tight text-curious-blue-500 p-5">Dentures and Bridges</h5>

                <div href="#">
                    <img class="w-44 mx-auto" src="{{ asset('imgs/dnb.webp') }}" alt="dentures-bridges">
                </div>
                <div class="px-5 py-3">
                    <p class="font-light text-center text-gray-700 text-[0.95rem] laptopm:text-[1.05rem] desktopm:text-lg">Dentures are removable prosthetics for
                        replacing some or all missing teeth, while bridges are fixed structures anchored
                        to adjacent teeth to restore oral function and appearance.</p>
                </div>

                <div class="absolute bottom-4 left-0 right-0 flex justify-center items-center">
                    <button class="py-2 px-8 bg-shamrock-400 rounded-lg text-white hover:bg-shamrock-500">Watch</button>
                </div>
            </div>


            <div class="relative max-w-sm desktops:max-w-lg bg-white border border-gray-200 rounded-lg shadow-md h-[31rem] laptops:h-[30rem]">
                <h5 class="text-2xl font-bold tracking-tight text-curious-blue-500 p-5">Oral Surgery</h5>

                <div href="#">
                    <img class="w-44 mx-auto" src="{{ asset('imgs/os.webp') }}" alt="oral-surgery">
                </div>
                <div class="px-5 py-3">
                    <p class="font-light text-center text-gray-700 text-[0.95rem] laptopm:text-[1.05rem] desktopm:text-lg">
                        Oral surgery involves surgical procedures on teeth, gums, jaws, or other
                        oral structures, including extractions, implants, gum grafts, and jaw surgeries.</p>
                </div>

                <div class="absolute bottom-4 left-0 right-0 m-auto flex justify-center items-center">
                    <button class="py-2 px-8  bg-shamrock-400 rounded-lg text-white hover:bg-shamrock-500">Watch</button>
                </div>
            </div>

            <div class="relative max-w-sm desktops:max-w-lg bg-white border border-gray-200 rounded-lg shadow-md h-[31rem] laptops:h-[30rem]">
                <h5 class="text-2xl font-bold tracking-tight text-curious-blue-500 p-5">Orthodontics</h5>

                <div href="#">
                    <img class="w-44 mx-auto" src="{{ asset('imgs/orth.webp') }}" alt="dentures-ortho">
                </div>
                <div class="px-5 py-3">
                    <p class="font-light text-center text-gray-700 text-[0.95rem] laptopm:text-[1.05rem] desktopm:text-lg">Orthodontics is a dental branch focusing on diagnosing,
                        preventing, and correcting misaligned teeth and jaws, typically using braces or aligners to improve oral health and aesthetics.</p>
                </div>

                <div class="absolute bottom-4 left-0 right-0 m-auto flex justify-center items-center">
                    <button class="py-2 px-8  bg-shamrock-400 rounded-lg text-white hover:bg-shamrock-500">Watch</button>
                </div>
            </div>
            <div class="relative max-w-sm desktops:max-w-lg bg-white border border-gray-200 rounded-lg shadow-md h-[31rem] laptops:h-[30rem]">
                <h5 class="text-2xl font-bold tracking-tight text-curious-blue-500 p-5">Periodontics and Preventive Dentistry</h5>

                <div href="#">
                    <img class="w-44 mx-auto" src="{{ asset('imgs/pnp.webp') }}" alt="dentures-pnp">
                </div>
                <div class="px-5 py-3">
                    <p class="font-light text-center text-gray-700 text-[0.95rem] laptopm:text-[1.05rem] desktopm:text-lg">Periodontics treats diseases affecting the gums,
                        while preventive dentistry focuses on maintaining oral health and preventing dental issues.</p>
                </div>

                <div class="absolute bottom-4 left-0 right-0 m-auto flex justify-center items-center">
                    <button class="py-2 px-8  bg-shamrock-400 rounded-lg text-white hover:bg-shamrock-500">Watch</button>
                </div>
            </div>
            <div class="relative max-w-sm desktops:max-w-lg bg-white border border-gray-200 rounded-lg shadow-md h-[31rem] laptops:h-[30rem]">
                <h5 class="text-2xl font-bold tracking-tight text-curious-blue-500 p-5">Restoration and Cosmetic Dentistry</h5>

                <div href="#">
                    <img class="w-44 mx-auto" src="{{ asset('imgs/rnc.webp') }}" alt="dentures-restore">
                </div>
                <div class="px-5 py-3">
                    <p class="font-light text-center text-gray-700 text-[0.95rem] laptopm:text-[1.05rem] desktopm:text-lg">Restorative dentistry repairs and replaces damaged or missing
                        teeth for function, while cosmetic dentistry enhances the aesthetics of teeth and smiles.</p>
                </div>

                <div class="absolute bottom-4 left-0 right-0 m-auto flex justify-center items-center">
                    <button class="py-2 px-8  bg-shamrock-400 rounded-lg text-white hover:bg-shamrock-500">Watch</button>
                </div>
            </div>

            <div class="relative max-w-sm desktops:max-w-lg bg-white border border-gray-200 rounded-lg shadow-md h-[31rem] laptops:h-[30rem]">
                <h5 class="text-2xl font-bold tracking-tight text-curious-blue-500 p-5">Root Canal Treatment</h5>

                <div href="#">
                    <img class="w-44 mx-auto py-3" src="{{ asset('imgs/rc.webp') }}" alt="dentures-ortho">
                </div>
                <div class="px-5 py-3">
                    <p class="font-light text-center text-gray-700 text-[0.95rem] laptopm:text-[1.05rem] desktopm:text-lg">Root canal treatment involves
                        removing infected or damaged pulp from inside a tooth, cleaning and sealing the space, to save
                        the tooth and alleviate pain or infection.</p>
                </div>

                <div class="absolute bottom-4 left-0 right-0 m-auto flex justify-center items-center">
                    <button class="py-2 px-8  bg-shamrock-400 rounded-lg text-white hover:bg-shamrock-500">Watch</button>
                </div>
            </div>
        </div>

    </div>
</div>
@include('partials.footer')
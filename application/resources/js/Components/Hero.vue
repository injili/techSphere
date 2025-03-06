<script>
export default {
    name: "Hero",
};
</script>
<template>
    <div
        class="h-[80vh] min-h-[80vh] max-h-[80vh] w-full flex flex-col justify-center"
    >
        <div class="h-relative gap-8 w-full grid grid-rows-2">
            <div class="px-8 row-span-1">
                <div
                    class="rounded-xl bg-cover bg-center bg-no-repeat w-full"
                    style="background-image: url('/images/hero.jpg')"
                >
                    <div
                        class="rounded-xl bg-black h-full bg-opacity-65 flex flex-col justify-center gap-4 px-8 py-24 lg:px-24"
                    >
                        <h1
                            class="font-poppins text-white text-6xl font-bold opacity-100"
                        >
                            The Title For The Post Of The Month
                        </h1>
                        <p
                            class="font-montserrat text-white text-3xl font-semibold"
                        >
                            Post Author
                        </p>
                        <p class="font-montserrat text-white text-xl">
                            Lorem ipsum dolor sit amet, consectetur aSuspendisse
                            rhoncusr libero ut iaculis interdum. Vestibulum nec
                            condimentum nisi. Mauris id sapien dui. Morbi nisi
                            ante, convallis in lacus in, tempor cursus tellus
                            ...
                        </p>
                    </div>
                </div>
            </div>
            <div class="row-span-1 h-full max-h-32 font-montserrat pb-32">
                <div class="grid grid-cols-8 gap-8">
                    <div
                        class="col-span-1 rounded-tr-xl rounded-br-xl bg-cover bg-center bg-no-repeat w-full h-full max-h-96"
                        style="background-image: url('/images/img1.jpg')"
                    >
                        <div
                            class="bg-gradient-to-br from-black/60 to-black/95 h-full w-full rounded-tr-xl rounded-br-xl"
                        ></div>
                    </div>
                    <div
                        class="col-span-2 rounded-xl bg-cover bg-center bg-no-repeat w-full h-full max-h-96"
                        style="background-image: url('/images/img2.jpg')"
                    >
                        <div
                            class="bg-gradient-to-br from-black/20 to-black/95 h-full w-full rounded-xl flex flex-col justify-end gap-4 p-4 lg:p-16"
                        >
                            <h4
                                class="text-4xl text-white text-end font-semibold"
                            >
                                This Title Here Now.
                            </h4>
                            <p class="text-white text-end">Post Author</p>
                        </div>
                    </div>
                    <div
                        class="col-span-2 rounded-xl bg-cover bg-center bg-no-repeat w-full h-full max-h-96"
                        style="background-image: url('/images/img3.jpg')"
                    >
                        <div
                            class="bg-gradient-to-br from-black/20 to-black/95 h-full w-full rounded-xl flex flex-col justify-end gap-4 p-4 lg:p-16"
                        >
                            <h4
                                class="text-4xl text-white text-end font-semibold"
                            >
                                This Other Title For Blog.
                            </h4>
                            <p class="text-white text-end">Post Author</p>
                        </div>
                    </div>
                    <div
                        class="col-span-2 rounded-xl bg-cover bg-center bg-no-repeat w-full h-full max-h-96"
                        style="background-image: url('/images/img4.jpg')"
                    >
                        <div
                            class="bg-gradient-to-br from-black/20 to-black/95 h-full w-full rounded-xl flex flex-col justify-end gap-4 p-4 lg:p-16"
                        >
                            <h4
                                class="text-4xl text-white text-end font-semibold"
                            >
                                The Post On The Platform.
                            </h4>
                            <p class="text-white text-end">Post Author</p>
                        </div>
                    </div>
                    <div
                        class="col-span-1 rounded-tl-xl rounded-bl-xl bg-cover bg-center bg-no-repeat max-h-96"
                        style="background-image: url('/images/img5.jpg')"
                    >
                        <div
                            class="bg-gradient-to-br from-black/20 to-black/95 h-full w-full rounded-tl-xl rounded-bl-xl"
                        ></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

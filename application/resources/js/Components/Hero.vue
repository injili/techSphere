<script>
export default {
    name: "Hero",
};
</script>
<template>
    <div class="min-h-screen p-8">
        <div class="min-h-screen grid grid-rows-2 gap-8 w-full">
            <div class="row-span-1 h-full">
                <div
                    class="rounded-lg bg-cover bg-center bg-no-repeat w-full h-full"
                    style="background-image: url('/images/hero.jpg')"
                >
                    <div
                        class="rounded-lg bg-black h-full w-full bg-opacity-50 flex flex-col justify-center gap-4 p-8"
                    >
                        <h1 class="text-white text-7xl font-black opacity-100">
                            The Title For The Post Of The Month
                        </h1>
                        <p class="text-white text-3xl font-semibold">
                            Post Author
                        </p>
                        <p class="text-white text-xl">
                            Lorem ipsum dolor sit amet, consectetur aSuspendisse
                            rhoncusr libero ut iaculis interdum. Vestibulum nec
                            condimentum nisi. Mauris id sapien dui. Morbi nisi
                            ante, convallis in lacus in, tempor cursus tellus
                            ...
                        </p>
                    </div>
                </div>
            </div>
            <div class="row-span-1">This</div>
        </div>
    </div>
</template>

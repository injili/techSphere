<script>
export default {
    name: "Hero",
};
</script>
<template>
    <div
        class="h-[80vh] min-h-[80vh] max-h-[80vh] gap-4 lg:gap-6 xl:gap-8 flex flex-col pb-8"
    >
        <div class="mx-4 lg:mx-6 xl:mx-8 h-full flex-grow">
            <div
                class="h-full rounded-xl bg-cover bg-center bg-no-repeat w-full"
                style="background-image: url('/images/hero.jpg')"
            >
                <div
                    class="rounded-xl bg-black h-full bg-opacity-65 flex flex-col justify-center gap-4 lg:gap-6 xl:gap-8 px-4 lg:px- md:py-18 lg:py-24 lg:px-24"
                >
                    <h1
                        class="font-poppins text-white text-4xl lg:text-6xl xl:text-8xl font-semibold lg:font-bold"
                    >
                        The Title For The Post Of The Month
                    </h1>
                    <p
                        class="font-montserrat text-white text-2xl lg:text-3xl xl:text-5xl lg:font-semibold"
                    >
                        Post Author
                    </p>
                    <p class="font-montserrat text-white lg:text-xl">
                        Lorem ipsum dolor sit amet, consectetur aSuspendisse
                        rhoncusr libero ut iaculis interdum. Vestibulum nec
                        condimentum nisi. Mauris id sapien dui. Morbi nisi ante,
                        convallis in lacus in, tempor cursus tellus ...
                    </p>
                    <button
                        class="bg-yellow-500 justify-end w-44 p-2 rounded-xl text-2xl font-montserrat"
                    >
                        Read
                    </button>
                </div>
            </div>
        </div>
        <div class="overflow-hidden relative w-full flex-grow h-full">
            <div class="flex animate-scroll whitespace-nowrap h-full">
                <div
                    v-for="(post, index) in [...posts, ...posts]"
                    :key="index"
                    class="flex-none w-1/4 lg:w-1/6 mx-2 lg:mx-3 xl:mx-4 rounded-xl bg-cover bg-center bg-no-repeat"
                    :style="{ backgroundImage: `url(${post.image})` }"
                >
                    <div
                        class="bg-gradient-to-br from-black/20 to-black/95 h-full w-full rounded-xl flex flex-col justify-end gap-8 p-8 text-wrap lg:p-16"
                    >
                        <h3
                            class="font-popins text-white text-end text-4xl lg:text-6xl font-semibold lg:font-bold"
                        >
                            {{ post.name }}
                        </h3>
                        <p
                            class="font-montserrat text-white text-2xl lg:text-3xl xl:text-5xl lg:font-semibold text-end"
                        >
                            {{ post.description }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script setup>
const posts = [
    {
        name: "This Title Here Now.",
        image: "/images/img1.jpg",
        description: "Post Author",
    },
    {
        name: "This Other Title For Blog.",
        image: "/images/img2.jpg",
        description: "Post Author",
    },
    {
        name: "The Post On The Platform.",
        image: "/images/img3.jpg",
        description: "Post Author",
    },
    {
        name: "This Title Here Now.",
        image: "/images/img4.jpg",
        description: "Post Author",
    },
    {
        name: "The Other Post On The Platform.",
        image: "/images/img5.jpg",
        description: "Post Author",
    },
    {
        name: "The Post That Is Loved.",
        image: "/images/img3.jpg",
        description: "Post Author",
    },
    {
        name: "The Other Thing Post.",
        image: "/images/img4.jpg",
        description: "Post Author",
    },
];
</script>

<style>
@keyframes scroll {
    0% {
        transform: translateX(0);
    }
    100% {
        transform: translateX(-100%);
    }
}

.animate-scroll {
    animation: scroll 20s linear infinite;
    width: 200%;
}
</style>

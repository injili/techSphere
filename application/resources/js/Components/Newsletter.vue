<script>
export default {
    name: "Newsletter",
};
</script>
<template>
    <div
        class="flex flex-col items-center w-full justify-center h-[50vh] gap-8 bg-bl"
    >
        <h2
            class="font-poppins text-yellow-400 text-4xl lg:text-6xl xl:text-8xl font-semibold lg:font-bold"
        >
            Newsletter
        </h2>
        <p
            class="text-white text-center max-w-5xl font-montserrat text-xl lg:text-2xl"
        >
            Lorem ipsum dolor sit amet, consectetur aSuspendisse rhoncus metus
            et ante dictum tempus. Nulla pulvinar libero ut iaculis interdum.
            Vestibulum nec condimentum nisi. Mauris id sapien dui. Morbi nisi
            ante, convallis in lacus in, tempor cursus tellus. Aenean porttitor,
            lorem pretium tincidunt egestas, odio quam pulvinar arcu,
            pellentesque ultricies arcu nisl vel enim.
        </p>
        <form action="" class="w-1/3">
            <input
                type="text"
                class="p-2 border border-gray-300 w-full p-4 rounded-xl border-2 border-yellow-400 bg-bl text-center text-white font-montserrat text-xl lg:text-2xl placeholder-white"
                placeholder="Email Address"
            />
        </form>
    </div>
</template>

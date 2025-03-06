<template>
    <nav class="text-blue-950 h-44">
        <div
            class="flex justify-between items-center h-full px-16 font-montserrat"
        >
            <img src="/images/pledge.png" alt="WhiteLogo" class="h-16" />
            <ul class="flex space-x-4 text-lg lg:text-xl xl:text-2xl">
                <li>
                    <a href="/about" class="p-4">Blogs</a>
                </li>
                <li>
                    <a href="/" class="p-4">Contact</a>
                </li>
                <li>
                    <a href="/" class="p-4">Admin LogIn</a>
                </li>
                <li>
                    <a href="/" class="p-4">Admin SignUp</a>
                </li>
            </ul>
            <p class="text-lg lg:text-xl xl:text-2xl">
                Copyright TechSphere 2025
            </p>
        </div>
    </nav>
</template>

<script>
export default {
    name: "Footer",
};
</script>

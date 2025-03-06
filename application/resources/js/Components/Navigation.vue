<template>
    <nav class="text-blue-950 h-44 mx-4 lg:mx-6 xl:mx-8">
        <div class="flex justify-between items-center h-full">
            <img src="/images/pledge.png" alt="WhiteLogo" class="h-16" />
            <ul class="flex space-x-4 text-lg lg:text-xl xl:text-2xl">
                <li>
                    <a href="/" class="p-4">Blogs</a>
                </li>
                <li>
                    <a href="/about" class="p-4">Contact</a>
                </li>
                <li>
                    <a href="/services" class="p-4">Admin LogIn</a>
                </li>
                <li>
                    <a href="/contact" class="pl-4">Admin SignUp</a>
                </li>
            </ul>
        </div>
    </nav>
</template>

<script>
export default {
    name: "Navigation",
};
</script>

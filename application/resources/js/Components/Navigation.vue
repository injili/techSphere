<template>
    <nav class="bg-whi text-blue-950 mx-4">
        <div class="flex justify-between items-center">
            <img src="/images/preach.png" alt="WhiteLogo" class="w-32" />
            <ul class="flex space-x-4">
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
                    <a href="/contact" class="p-4">Admin SignUp</a>
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

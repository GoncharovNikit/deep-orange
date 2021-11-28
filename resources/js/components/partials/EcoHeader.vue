<template>
    <header>
        <div class="wrapper">
            <nav>
                <ul class="navigation">
                    <li>
                        <a href="#" @click="$router.push('/')"
                            >Home
                            <div class="line"></div
                        ></a>
                    </li>
                    <li>
                        <a href="#" @click="$router.push('/eco-groups')"
                            >Eco Groups
                            <div class="line"></div
                        ></a>
                    </li>
                    <li>
                        <a href="#"
                            >Feed
                            <div class="line"></div
                        ></a>
                    </li>
                    <li>
                        <a href="#about-us"
                            >About us
                            <div class="line"></div
                        ></a>
                    </li>
                    <li>
                        <a href="#"
                            >Find group
                            <div class="line"></div
                        ></a>
                    </li>
                </ul>
            </nav>
            <div class="slider">
                <div class="slider_item">
                    <div class="slider-container">
                        <h1 class="slider_headling">Deep Orange Project</h1>
                        <p class="slider_paragraph slider_p">
                            Everything about your plants
                        </p>
                        <div class="slide_img img_1"></div>
                    </div>
                </div>
                <div class="slider_item">
                    <div class="slider-container">
                        <h1 class="slider_headling">
                            Everything about your plants
                        </h1>
                        <div class="slide_img img_2"></div>
                    </div>
                </div>
            </div>
        </div>
    </header>
</template>

<script>
export default {};
</script>

<style scoped>
</style>

<template>
    <div class="flex justify-center mt-32 h-full">
        <div class="w-full max-w-2xl">
            <form class="bg-white shadow-md px-12 pt-12 pb-16 mb-4" @submit.prevent="sendMail">
                <div class="mb-4">
                    <svg-vue class="w-16 block m-auto" icon="logo_64x64" />
                    <span
                        class="block my-2 text-2xl text-black-600 font-semibold text-center align-middle">
                        Benotes
                    </span>
                </div>

                <div :class="error || message ? 'mb-4' : 'mb-12'">
                    <label class="label" for="email">Email</label>
                    <input
                        v-model="email"
                        class="input"
                        type="email"
                        name="email"
                        placeholder="Email Address"
                        autofocus
                        required />
                </div>

                <div v-if="error" class="mb-12">
                    <p class="text-red-500 text-sm italic">
                        {{ error }}
                    </p>
                </div>

                <div v-else-if="message" class="mb-12">
                    <p class="text-green-500 text-sm italic">
                        {{ message }}
                    </p>
                </div>

                <div class="flex items-center justify-between">
                    <button class="button" type="submit">Request Reset</button>
                </div>
            </form>
        </div>
    </div>
</template>
<script>
import axios from 'axios'
export default {
    data() {
        return {
            email: '',
            error: '',
            message: '',
        }
    },
    methods: {
        sendMail() {
            axios
                .post('/api/auth/forgot', {
                    email: this.email,
                })
                .then((response) => {
                    if (response.status === 200) {
                        this.message = response.data
                    }
                })
                .catch((error) => {
                    if (error.response.data.error) {
                        this.error = error.response.data.error
                    } else if (error.response.data.password) {
                        this.error = error.response.data.password.toString()
                    }
                })
        },
    },
}
</script>
<style>
.bg-gray-input {
    background-color: #ececec;
}
</style>

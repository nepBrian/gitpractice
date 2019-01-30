<template>
    <div>
        <div class="w-full bg-blue-dark sm:bg-green-dark md:bg-orange-dark lg:bg-red-dark xl:bg-black  h-48 flex justify-center items-center text-white text-center px-10">
            Privacy Policy | Terms Of Service <br/><br/>
            Copyright © 2018 {{ association.fullName }}<br/>
            Website built and maintained by New Equity Productions/NEP Inc.<br/><br/>

            NEP IS A UNION WORKPLACE!<br/> PROUD MEMBER OF CWA L-9003
        </div>
    </div>
</template>

<script>
    import { association } from '../data.json'

    export default {
        data() {
            return {
                association: association
            }
        }
    }
</script>

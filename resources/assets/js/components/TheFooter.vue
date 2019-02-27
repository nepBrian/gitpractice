<template>
    <div>
        <div class="bg-blue-darker py-16">
            <p class="text-white text-center">
                <a class="text-blue hover:text-blue-dark no-underline" href="privacy-policy">Privacy Policy</a> | <a class="text-blue hover:text-blue-dark no-underline" href="terms-of-service">Terms Of Service</a> <br/><br/>
                Copyright © {{ currentYear }} {{ association.fullName }}<br/>
                Website built and maintained by New Equity Productions/NEP Inc.<br/><br/>

                NEP IS A UNION WORKPLACE!<br/> PROUD MEMBER OF CWA L-9003
            </p>
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
        },
        computed: {
            currentYear: function() {
                return new Date().getFullYear();
            }
        }
    }
</script>

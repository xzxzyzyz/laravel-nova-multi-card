<template>
    <div>
        <h3 class="mb-6 text-90 font-normal text-2xl">{{ card.title || 'Dashboard' }}</h3>

        <div class="flex flex-wrap -mx-3 mb-3">
            <div class="px-3 mb-6" v-for="c in card.cards" v-bind:class="`w-${c.width}`">
                <component :is="c.component" :card="c" :resourceName="resourceName" :resourceId="resourceId" class="card-panel" />
            </div>
        </div>
    </div>
</template>

<script>
  export default {
    props: {
      card: {
        type: Object,
        required: true,
      },
      resourceName: {
        type: String,
        default: '',
      },
      resourceId: {
        type: [Number, String],
        default: '',
      },
    },

    mounted() {
      //
    },
  }
</script>

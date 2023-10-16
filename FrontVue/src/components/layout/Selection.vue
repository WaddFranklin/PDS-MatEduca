<template>
  <div>
    <div class="rating">
      <span
        v-for="star in stars"
        :key="star"
        @click="rateMY(star)"
        :class="{ 'star-filled': star <= selectedStar }"
      >
        ★
      </span>
    </div>
  </div>
</template>

<script>
export default {
  props: ['rate'],
  data() {
    return {
      stars: [1, 2, 3, 4, 5, 6,7,8,9,10],
      selectedStar: 0
    };
  },
  methods: {
    rateMY(star) {
      this.rate(star)
      this.selectedStar = star;
    },
  },
};
</script>

<style>
.rating {
  font-size: 0;
}

.rating span {
  font-size: 24px;
  cursor: pointer;
  transition: color 0.3s;
}

.rating span.star-filled {
  color: gold;
}
</style>
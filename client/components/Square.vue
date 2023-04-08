<script setup lang="ts">
type Props = {
  x: number;
  y: number;
};

const { x, y } = defineProps<Props>();

const left = (x - 1) * 64.8 + 10;
const top = (y - 1) * 64.4 + 7;
</script>

<template>
  <div
    :id="`square_${x}_${y}`"
    class="square"
    :style="{
      left: `${left}px`,
      top: `${top}px`,
    }"
  ></div>
</template>

<style scoped>
.square {
  width: 62px;
  height: 62px;
  position: absolute;
  background-color: red;
}
</style>

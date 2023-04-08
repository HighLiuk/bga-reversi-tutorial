<script setup lang="ts">
import Square from "./Square.vue";
</script>

<template>
  <div class="board">
    <template v-for="x in 8">
      <template v-for="y in 8">
        <Square :x="x" :y="y"></Square>
      </template>
    </template>
  </div>
</template>

<style scoped>
.board {
  width: 536px;
  height: 528px;
  background-image: url("img/board.jpg");
  position: relative;
}
</style>

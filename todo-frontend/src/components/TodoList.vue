<template>
  <div>
    <h1>Todo List</h1>
    <ul>
      <li v-for="todo in todos" :key="todo.id">
        {{ todo.title }} - {{ todo.completed ? 'Done' : 'Pending' }}
      </li>
    </ul>
  </div>
</template>

<script setup>
import { ref, onMounted } from 'vue';
import axios from 'axios';

const todos = ref([]);

onMounted(async () => {
  const response = await axios.get('http://127.0.0.1:8000/api/todos');
  todos.value = response.data;
});
</script>

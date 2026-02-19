<template>
  <main class="portfolio">
    <section class="hero" :style="heroStyle">
      <div class="overlay">
        <h1>{{ profile.hero_title }}</h1>
        <p>{{ profile.hero_roles?.join(' • ') }}</p>
      </div>
    </section>

    <section class="about">
      <h2>About</h2>
      <p><strong>Name:</strong> {{ profile.full_name }}</p>
      <p><strong>Email:</strong> {{ profile.email }}</p>
      <p><strong>Phone:</strong> {{ profile.phone }}</p>
      <p><strong>Address:</strong> {{ profile.address }}</p>
      <p>{{ profile.about_summary }}</p>
    </section>

    <section class="services">
      <h2>Services</h2>
      <article v-for="service in profile.services" :key="service.title" class="service-card">
        <h3>{{ service.title }}</h3>
        <p>{{ service.description }}</p>
      </article>
    </section>
  </main>
</template>

<script setup>
import { computed, onMounted, ref } from 'vue';

const profile = ref({
  hero_title: 'Loading...',
  hero_roles: [],
  full_name: '',
  email: '',
  phone: '',
  address: '',
  about_summary: '',
  services: [],
});

const heroStyle = computed(() => ({ backgroundImage: 'url(/assets/img/hero-bg2.jpg)' }));

onMounted(async () => {
  const response = await fetch('/api/portfolio');
  if (response.ok) {
    profile.value = await response.json();
  }
});
</script>

panel.plugin("preya/kirby-team-box-block", {
  blocks: {
    "team-box": `
      <div @click="open">
        <div class="name">{{ content.name }}</div>
        <div class="position">{{ content.position }}</div>
        <div class="email">{{ content.email }}</div>
      </div>
    `,
  },
});

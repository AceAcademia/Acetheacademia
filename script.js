// Define event data
const events = [
    {
        title: 'Event Title 1',
        date: 'June 12, 2023',
        location: 'Event Location 1',
        image: 'event-image-1.jpg',
        registerLink: '#'
    },
    {
        title: 'Event Title 2',
        date: 'July 15, 2023',
        location: 'Event Location 2',
        image: 'event-image-2.jpg',
        registerLink: '#'
    }
];

// Render events
const eventContainer = document.querySelector('.event-container');

events.forEach(event => {
    const eventCard = `
    <div class="event-card">
      <img src="${event.image}" alt="${event.title}">
      <h3>${event.title}</h3>
      <p>${event.date}</p>
      <p>${event.location}</p>
      <button onclick="window.location.href='${event.registerLink}'">Register Now</button>
    </div>
  `;
    eventContainer.insertAdjacentHTML('beforeend', eventCard);
});

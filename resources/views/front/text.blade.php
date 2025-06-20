
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Stacked Cards - CodyHouse Style</title>
    <style>
      body {
        margin: 0;
        font-family: sans-serif;
        background: #f5f5f5;
      }

      .book-section {
        padding: 100px 20px;
      }

      .book_top_heading {
        min-height: 100vh;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
      }

      .bottom_wrapper {
        display: flex;
        justify-content: space-between;
        width: 100%;
      }

      .book_animate_wrapper {
        min-height: 100vh;
      }

      .stacking-cards__list {
        position: relative;
        list-style: none;
        margin: 0;
        padding: 0;
      }

      .stacking-cards__item {
        position: sticky;
        top: 20vh;
        margin: 0 auto 2rem;
        width: 90%;
        max-width: 500px;
        height: 300px;
        background-color: #fff;
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        border-radius: 12px;
        z-index: 1;
        transition: transform 0.3s, box-shadow 0.3s;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 24px;
      }

      .stacking-cards__item--stacked {
        transform: scale(0.9);
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
        z-index: 0;
      }
    </style>
  </head>
  <body>
    <section class="book-section section position-relative">
      <div class="container">
        <div class="book_top_heading text-uppercase">
          <h2 class="center_text">recent</h2>
          <div class="bottom_wrapper">
            <h2 class="left_text">book</h2>
            <h2 class="right_text">work</h2>
          </div>
        </div>

        <div class="book_animate_wrapper">
          <div class="stacked-card js-stacking-cards">
            <ul class="stacking-cards__list">
              <li class="stacking-cards__item">Card 1</li>
              <li class="stacking-cards__item">Card 2</li>
              <li class="stacking-cards__item">Card 3</li>
              <li class="stacking-cards__item">Card 4</li>
            </ul>
          </div>
        </div>


         <div class="book_top_heading text-uppercase">
          <h2 class="center_text">recent</h2>
          <div class="bottom_wrapper">
            <h2 class="left_text">book</h2>
            <h2 class="right_text">work</h2>
          </div>
        </div>

         <div class="book_top_heading text-uppercase">
          <h2 class="center_text">recent</h2>
          <div class="bottom_wrapper">
            <h2 class="left_text">book</h2>
            <h2 class="right_text">work</h2>
          </div>
        </div>
      </div>
    </section>

    <script>
      document.addEventListener("DOMContentLoaded", function () {
        const cards = document.querySelectorAll(
          ".js-stacking-cards .stacking-cards__item"
        );

        const observer = new IntersectionObserver(
          (entries) => {
            entries.forEach((entry) => {
              if (entry.isIntersecting) {
                entry.target.classList.remove("stacking-cards__item--stacked");
              } else {
                entry.target.classList.add("stacking-cards__item--stacked");
              }
            });
          },
          {
            threshold: 0.5,
          }
        );

        cards.forEach((card) => {
          observer.observe(card);
        });
      });
    </script>
  </body>
</html>

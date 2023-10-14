<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    @vite(['resources/css/app.css'])

    <style>

    html, body {
        margin: 0;
    }

            .wrapper {
            width: 100vw;
            height: 100vh;
            background: radial-gradient(farthest-corner at 30vw 20vh, #7397a1 1%, #3f2c41 100%);
            }

            .snow {
            border-radius: 50%;
            opacity: 0.8;
            position: absolute;
            top: -100vh;
            animation-name: fall;
            animation-timing-function: linear;
            animation-iteration-count: infinite;
            }

            .layer1 {
            width: 1.5rem;
            height: 1.5rem;
            filter: blur(1.5px);
            box-shadow: 51.2vw 77.5vh 0 -0.48rem#fff,27.3vw 74.3vh 0 -0.14rem#fff,83.6vw 85.1vh 0 -0.2rem#fff,87.3vw 84vh 0 -0.27rem#fff,20.6vw 75.3vh 0 -0.43rem#fff,26.8vw 53.4vh 0 -0.08rem#fff,21.4vw 79vh 0 -0.2rem#fff,57.4vw 99.3vh 0 -0.28rem#fff,23.8vw 47.4vh 0 -0.06rem#fff,42vw 19.8vh 0 -0.49rem#fff,35vw 23.5vh 0 -0.18rem#fff,28.7vw 23.6vh 0 -0.21rem#fff,27.2vw 52.7vh 0 -0.22rem#fff,32.3vw 67.5vh 0 -0.12rem#fff,51vw 12.7vh 0 -0.25rem#fff,94.7vw 98.3vh 0 -0.4rem#fff,79.4vw 22.8vh 0 -0.33rem#fff,20.6vw 90.1vh 0 -0.28rem#fff,9.8vw 61.8vh 0 -0.48rem#fff,23.8vw 22.4vh 0 -0.04rem#fff,9.4vw 1.2vh 0 -0.43rem#fff,16.7vw 49vh 0 -0.36rem#fff,34.1vw 42.4vh 0 -0.09rem#fff,64.5vw 68.7vh 0 -0.41rem#fff,57.8vw 81.8vh 0 -0.2rem#fff,83.6vw 91vh 0 -0.43rem#fff,27.8vw 65.7vh 0 -0.15rem#fff,26.3vw 79.1vh 0 -0.43rem#fff,84.3vw 41.5vh 0 -0.23rem#fff,93.5vw 93.8vh 0 -0.11rem#fff,32vw 11vh 0 -0.41rem#fff,35.7vw 0.5vh 0 -0.16rem#fff,47.2vw 1.7vh 0 -0.24rem#fff,75.4vw 68.4vh 0 -0.06rem#fff,29.8vw 82.6vh 0 -0.29rem#fff,39.9vw 8.8vh 0 -0.4rem#fff,97.5vw 45.3vh 0 -0.41rem#fff,37.4vw 93.7vh 0 -0.11rem#fff,32.5vw 64vh 0 -0.03rem#fff,17.5vw 17.6vh 0 -0.16rem#fff,10.6vw 24vh 0 -0.21rem#fff,54.7vw 89.7vh 0 -0.11rem#fff,45.1vw 41.1vh 0 -0.03rem#fff,31.7vw 15.1vh 0 -0.45rem#fff,86.9vw 55vh 0 -0.02rem#fff,58.6vw 23.6vh 0 -0.21rem#fff,73vw 21.9vh 0 -0.34rem#fff,72.1vw 50.2vh 0 -0.44rem#fff,26.3vw 86.2vh 0 -0.33rem#fff,77.6vw 61.6vh 0 -0.04rem#fff,1.3vw 64.4vh 0 -0.1rem#fff,35.4vw 29.4vh 0 -0.48rem#fff,49.3vw 29vh 0 -0.03rem#fff,82.6vw 98.6vh 0 -0.29rem#fff,27.6vw 84.7vh 0 -0.2rem#fff,6.5vw 33.4vh 0 -0.08rem#fff,46.3vw 86.4vh 0 -0.26rem#fff,67.7vw 51.2vh 0 -0.01rem#fff,74.5vw 67.8vh 0 -0.14rem#fff,90.1vw 74.4vh 0 -0.42rem#fff,76vw 29.9vh 0 -0.27rem#fff,10.3vw 77.8vh 0 -0.45rem#fff,22.3vw 27.2vh 0 -0.1rem#fff,85.7vw 41.2vh 0 -0.1rem#fff,76vw 42.5vh 0 -0.42rem#fff,82.7vw 45.1vh 0 -0.06rem#fff,12.7vw 73.9vh 0 -0.16rem#fff,48.1vw 3.3vh 0 -0.11rem#fff,27.7vw 62.8vh 0 -0.4rem#fff,54.2vw 64.7vh 0 -0.11rem#fff,78.2vw 28.9vh 0 -0.29rem#fff,8.8vw 67.2vh 0 -0.19rem#fff,23.9vw 61.7vh 0 -0.01rem#fff,35.2vw 62.3vh 0 -0.28rem#fff,29vw 30.5vh 0 -0.33rem#fff,28.4vw 24vh 0 -0.09rem#fff,14.2vw 94vh 0 -0.41rem#fff,8.9vw 72.7vh 0 -0.13rem#fff,42vw 62.6vh 0 -0.43rem#fff,70.8vw 9.6vh 0 -0.41rem#fff,85.1vw 19.3vh 0 -0.42rem#fff,17.8vw 26.1vh 0 -0.42rem#fff,61.8vw 92.1vh 0 -0.03rem#fff,99.7vw 88.6vh 0 -0.3rem#fff,16.4vw 8.3vh 0 -0.4rem#fff,12.9vw 39.7vh 0 -0.09rem#fff,60.6vw 71.1vh 0 -0.04rem#fff,81.7vw 53.5vh 0 -0.19rem#fff,6.5vw 35.4vh 0 -0.47rem#fff,97.6vw 27.2vh 0 -0.01rem#fff,23vw 40.3vh 0 -0.28rem#fff,34.9vw 40.3vh 0 -0.1rem#fff,64vw 90vh 0 -0.02rem#fff,54.5vw 92.3vh 0 -0.47rem#fff,84.6vw 29.4vh 0 -0.02rem#fff,27.4vw 40.5vh 0 -0.13rem#fff,16.8vw 88vh 0 -0.31rem#fff,64.1vw 40.7vh 0 -0.28rem#fff,16.8vw 85.3vh 0 -0.42rem#fff,65.7vw 49vh 0 -0.15rem#fff,96.9vw 52.9vh 0 -0.14rem#fff,52vw 17vh 0 -0.37rem#fff,7.8vw 46.7vh 0 -0.28rem#fff,60.6vw 59.8vh 0 -0.22rem#fff,13.6vw 24.7vh 0 -0.36rem#fff,60vw 27.8vh 0 -0.47rem#fff,83.1vw 56.6vh 0 -0.29rem#fff,36vw 6.2vh 0 -0.12rem#fff,8.8vw 0.3vh 0 -0.41rem#fff,30vw 7.6vh 0 -0.28rem#fff,37.9vw 62.7vh 0 -0.13rem#fff,86.6vw 72.1vh 0 -0.06rem#fff,62.4vw 75.9vh 0 -0.1rem#fff,43.6vw 47.1vh 0 -0.27rem#fff,44.5vw 59.6vh 0 -0.31rem#fff,36vw 27.5vh 0 -0.33rem#fff,39.6vw 28.6vh 0 -0.14rem#fff,18vw 80.1vh 0 -0.29rem#fff,60.7vw 38.9vh 0 -0.35rem#fff,80.4vw 66.8vh 0 -0.08rem#fff,10.8vw 54.7vh 0 -0.38rem#fff,98.3vw 97.5vh 0 -0.1rem#fff,67.5vw 90.6vh 0 -0.08rem#fff,21.9vw 29.1vh 0 -0.19rem#fff,34.2vw 92.1vh 0 -0.1rem#fff,17vw 33.2vh 0 -0.25rem#fff,24.2vw 54.3vh 0 -0.12rem#fff,80.3vw 17.5vh 0 -0.26rem#fff,67.6vw 40.2vh 0 -0.02rem#fff,14.6vw 4.7vh 0 -0.47rem#fff,96.2vw 88vh 0 -0.17rem#fff,6.1vw 42.2vh 0 -0.16rem#fff,16.8vw 89vh 0 -0.03rem#fff,71vw 91vh 0 -0.06rem#fff,76.5vw 90.5vh 0 -0.14rem#fff,31.4vw 73.2vh 0 -0.03rem#fff,57.6vw 99.6vh 0 -0.12rem#fff,43.3vw 79.1vh 0 -0.36rem#fff,77.7vw 4.8vh 0 -0.5rem#fff,36.8vw 31.5vh 0 -0.24rem#fff,62.9vw 94.7vh 0 -0.26rem#fff,51.6vw 86.1vh 0 -0.39rem#fff,19vw 53vh 0 -0.43rem#fff,46.8vw 88.7vh 0 -0.3rem#fff,47.2vw 7.3vh 0 -0.45rem#fff,48.7vw 14.6vh 0 -0.43rem#fff,61vw 34vh 0 -0.08rem#fff,66vw 75.2vh 0 -0.19rem#fff,32.6vw 15.1vh 0 -0.13rem#fff,5.5vw 26.2vh 0 -0.22rem#fff,11.1vw 90.5vh 0 -0.02rem#fff,89vw 67.6vh 0 -0.32rem#fff,6.5vw 43.6vh 0 -0.29rem#fff,22.2vw 26.8vh 0 -0.15rem#fff,55.3vw 54.3vh 0 -0.34rem#fff,51.7vw 87.8vh 0 -0.47rem#fff,45.8vw 55.7vh 0 -0.37rem#fff,77.5vw 91vh 0 -0.05rem#fff,17vw 64.2vh 0 -0.38rem#fff,99.6vw 30.9vh 0 -0.4rem#fff,91.7vw 27.3vh 0 -0.11rem#fff,2.8vw 7.6vh 0 -0.42rem#fff,33.3vw 74.4vh 0 -0.15rem#fff,2.2vw 15.6vh 0 -0.08rem#fff,55.6vw 21.7vh 0 -0.15rem#fff,21.3vw 88.4vh 0 -0.47rem#fff,89.3vw 24.1vh 0 -0.27rem#fff,48.5vw 54.6vh 0 -0.38rem#fff,23.9vw 98.2vh 0 -0.47rem#fff,50.9vw 25.1vh 0 -0.44rem#fff,67.7vw 84.8vh 0 -0.19rem#fff,4.7vw 14.8vh 0 -0.23rem#fff,77.5vw 21.8vh 0 -0.04rem#fff,64.1vw 79.9vh 0 -0.29rem#fff,65.4vw 37.9vh 0 -0.02rem#fff,96.4vw 6.6vh 0 -0.15rem#fff,50.3vw 64.8vh 0 -0.36rem#fff,16.9vw 28.3vh 0 -0.18rem#fff,11.4vw 34.2vh 0 -0.35rem#fff,4.5vw 77.4vh 0 -0.07rem#fff,68.1vw 47.3vh 0 -0.14rem#fff,62.6vw 4.4vh 0 -0.28rem#fff,16.7vw 9.8vh 0 -0.14rem#fff,31.9vw 3vh 0 -0.33rem#fff,31.2vw 95vh 0 -0.19rem#fff,63.8vw 43.6vh 0 -0.03rem#fff,93.1vw 80.2vh 0 -0.18rem#fff,65.7vw 67.7vh 0 -0.5rem#fff,79.2vw 53.9vh 0 -0.35rem#fff,58.3vw 7.3vh 0 -0.41rem#fff,12.2vw 53vh 0 -0.38rem#fff,87.3vw 44.9vh 0 -0.17rem#fff,65vw 64.1vh 0 -0.32rem#fff,3.3vw 64.6vh 0 -0.38rem#fff,51vw 65.7vh 0 -0.06rem#fff,14.6vw 65.6vh 0 -0.36rem#fff,32.6vw 91.3vh 0 -0.47rem#fff,53.8vw 41.1vh 0 -0.19rem#fff,28vw 71.4vh 0 -0.31rem#fff,18.9vw 71vh 0 -0.41rem#fff,35.4vw 86.3vh 0 -0.45rem#fff,85.9vw 15.4vh 0 -0.46rem#fff,72.7vw 50.6vh 0 -0.27rem#fff,95.1vw 49vh 0 -0.49rem#fff,11.7vw 25.1vh 0 -0.13rem#fff,25vw 44.2vh 0 -0.47rem#fff,56.2vw 77.7vh 0 -0.01rem#fff,13vw 59.4vh 0 -0.19rem#fff,37.9vw 91.4vh 0 -0.39rem#fff,62vw 33.1vh 0 -0.04rem#fff,67.2vw 90.3vh 0 -0.07rem#fff,82vw 97.4vh 0 -0.15rem#fff,9.7vw 80vh 0 -0.16rem#fff,67.8vw 90.1vh 0 -0.32rem#fff,10.9vw 6.9vh 0 -0.05rem#fff,74.2vw 59.8vh 0 -0.06rem#fff,38.6vw 12.9vh 0 -0.06rem#fff,96.3vw 52.1vh 0 -0.43rem#fff,95.9vw 9.9vh 0 -0.48rem#fff,49.6vw 99.3vh 0 -0.27rem#fff,78.6vw 56.1vh 0 -0.3rem#fff,6.5vw 34.5vh 0 -0.41rem#fff,17.1vw 98.7vh 0 -0.14rem#fff,20.5vw 63.4vh 0 -0.4rem#fff,77.2vw 14.9vh 0 -0.13rem#fff,54.8vw 30.8vh 0 -0.29rem#fff,44.4vw 80.8vh 0 -0.13rem#fff,96.9vw 93.3vh 0 -0.4rem#fff,36.4vw 36.7vh 0 -0.07rem#fff,55.8vw 12.9vh 0 -0.1rem#fff,91.3vw 25.5vh 0 -0.27rem#fff,37.2vw 3.2vh 0 -0.31rem#fff,34.8vw 30.5vh 0 -0.37rem#fff,82.7vw 81.5vh 0 -0.48rem#fff,29.9vw 21.1vh 0 -0.5rem#fff,96.1vw 79.4vh 0 -0.09rem#fff,51.3vw 57.6vh 0 -0.37rem#fff,79.7vw 7.2vh 0 -0.05rem#fff,93.1vw 30.5vh 0 -0.47rem#fff,71.4vw 83vh 0 -0.04rem#fff,40.5vw 12.4vh 0 -0.09rem#fff,2.4vw 65.3vh 0 -0.27rem#fff,10.9vw 62.5vh 0 -0.34rem#fff,95.6vw 90.6vh 0 -0.28rem#fff,75.2vw 74.4vh 0 -0.01rem#fff,32.6vw 46.7vh 0 -0.16rem#fff,93vw 19.6vh 0 -0.32rem#fff,30.3vw 16.1vh 0 -0.29rem#fff,45.1vw 97.3vh 0 -0.31rem#fff,50.7vw 26.5vh 0 -0.41rem#fff,1.1vw 97.3vh 0 -0.34rem#fff,51.2vw 4.2vh 0 -0.33rem#fff,28.1vw 21.7vh 0 -0.43rem#fff,82.2vw 1.6vh 0 -0.32rem#fff,52.2vw 13vh 0 -0.32rem#fff,11.3vw 89.2vh 0 -0.43rem#fff,85.6vw 45.7vh 0 -0.03rem#fff,28.1vw 29vh 0 -0.25rem#fff,89.8vw 54.5vh 0 -0.5rem#fff,63.8vw 20.5vh 0 -0.05rem#fff,6.2vw 37.1vh 0 -0.2rem#fff,80.9vw 13.9vh 0 -0.1rem#fff,86.7vw 81.8vh 0 -0.45rem#fff,14.2vw 95.2vh 0 -0.26rem#fff,2.4vw 6.6vh 0 -0.47rem#fff,36.1vw 15.1vh 0 -0.48rem#fff,69.4vw 83.5vh 0 -0.24rem#fff,56.3vw 48.7vh 0 -0.14rem#fff,95.5vw 73vh 0 -0.41rem#fff,23.1vw 98.3vh 0 -0.1rem#fff,7.1vw 78.1vh 0 -0.1rem#fff,73.5vw 35.7vh 0 -0.47rem#fff,57.4vw 14.5vh 0 -0.32rem#fff,93.7vw 76.1vh 0 -0.3rem#fff,83vw 4.4vh 0 -0.38rem#fff,86.1vw 21.6vh 0 -0.16rem#fff,27vw 91.6vh 0 -0.45rem#fff,74.9vw 64.9vh 0 -0.24rem#fff,58.9vw 34.8vh 0 -0.2rem#fff,56.3vw 18.3vh 0 -0.01rem#fff,37.2vw 17.3vh 0 -0.02rem#fff,33.3vw 43.4vh 0 -0.47rem#fff,24vw 58.4vh 0 -0.18rem#fff,63.6vw 19.9vh 0 -0.32rem#fff,70.2vw 5.8vh 0 -0.49rem#fff,41.6vw 11.7vh 0 -0.04rem#fff,5.2vw 83.3vh 0 -0.26rem#fff,21.5vw 24.3vh 0 -0.24rem#fff,44.9vw 54.5vh 0 -0.14rem#fff,40.3vw 52.7vh 0 -0.24rem#fff,25.2vw 73.7vh 0 -0.29rem#fff,69.9vw 22.7vh 0 -0.1rem#fff,14.2vw 3.7vh 0 -0.35rem#fff,79.3vw 93.4vh 0 -0.12rem#fff,83.2vw 66vh 0 -0.07rem#fff,12.5vw 67.5vh 0 -0.25rem#fff,34vw 89.3vh 0 -0.46rem#fff,71.4vw 0.5vh 0 -0.49rem#fff,95.8vw 82.8vh 0 -0.32rem#fff,92.6vw 68.9vh 0 -0.05rem#fff;
            animation-duration: 12s;
            }

            .layer1.a {
            animation-delay: -6s;
            }

            .layer2 {
            width: 1.2rem;
            height: 1.2rem;
            filter: blur(3px);
            box-shadow: 10.1vw 87.9vh 0 -0.31rem#fff,74.4vw 2.1vh 0 -0.31rem#fff,42.6vw 7.5vh 0 -0.29rem#fff,75.8vw 51.6vh 0 -0.04rem#fff,49.1vw 66.8vh 0 -0.19rem#fff,94.7vw 94.2vh 0 -0.49rem#fff,28.5vw 44.5vh 0 -0.08rem#fff,12.2vw 54.3vh 0 -0.14rem#fff,10.7vw 71.4vh 0 -0.09rem#fff,45.2vw 30.6vh 0 -0.33rem#fff,45.3vw 56.9vh 0 -0.1rem#fff,98vw 7.4vh 0 -0.06rem#fff,30.8vw 23.1vh 0 -0.33rem#fff,28.4vw 9.4vh 0 -0.29rem#fff,14.2vw 47.1vh 0 -0.46rem#fff,28.8vw 2.2vh 0 -0.32rem#fff,42.1vw 36.7vh 0 -0.5rem#fff,71.4vw 7.2vh 0 -0.46rem#fff,34.8vw 38vh 0 -0.29rem#fff,45.6vw 50.1vh 0 -0.19rem#fff,79.3vw 90.3vh 0 -0.17rem#fff,78.9vw 87.9vh 0 -0.01rem#fff,23.5vw 18.7vh 0 -0.21rem#fff,63.3vw 36.7vh 0 -0.39rem#fff,55.7vw 84.7vh 0 -0.04rem#fff,37.8vw 88.2vh 0 -0.37rem#fff,39.5vw 36.3vh 0 -0.27rem#fff,53.9vw 23.1vh 0 -0.43rem#fff,14.6vw 24.1vh 0 -0.41rem#fff,32.1vw 83.2vh 0 -0.01rem#fff,43.1vw 44.5vh 0 -0.5rem#fff,49.9vw 3.7vh 0 -0.1rem#fff,45.9vw 98vh 0 -0.5rem#fff,90.9vw 49.8vh 0 -0.39rem#fff,17.8vw 42.5vh 0 -0.03rem#fff,51.8vw 40.1vh 0 -0.07rem#fff,37.6vw 62.7vh 0 -0.05rem#fff,2.5vw 41.4vh 0 -0.43rem#fff,63.4vw 84.6vh 0 -0.36rem#fff,43.1vw 93.9vh 0 -0.14rem#fff,84.3vw 31.5vh 0 -0.37rem#fff,78.2vw 71.5vh 0 -0.03rem#fff,84.9vw 69.9vh 0 -0.15rem#fff,61.1vw 38.4vh 0 -0.16rem#fff,28.6vw 7.2vh 0 -0.05rem#fff,48.5vw 79.8vh 0 -0.32rem#fff,26.4vw 74.9vh 0 -0.31rem#fff,14.6vw 63.7vh 0 -0.27rem#fff,73.6vw 55.7vh 0 -0.15rem#fff,79.3vw 25.6vh 0 -0.04rem#fff,36.1vw 13.2vh 0 -0.06rem#fff,72.3vw 84.6vh 0 -0.22rem#fff,41.5vw 52.7vh 0 -0.21rem#fff,94vw 87.1vh 0 -0.15rem#fff,6.7vw 13.7vh 0 -0.3rem#fff,99.2vw 33.3vh 0 -0.46rem#fff,35.4vw 42.7vh 0 -0.13rem#fff,45vw 13.2vh 0 -0.28rem#fff,42.5vw 5.4vh 0 -0.33rem#fff,39.1vw 32.6vh 0 -0.29rem#fff,62.8vw 93.6vh 0 -0.08rem#fff,89.8vw 73.5vh 0 -0.3rem#fff,69.4vw 72.6vh 0 -0.06rem#fff,48.9vw 13.1vh 0 -0.37rem#fff,19.1vw 13.7vh 0 -0.35rem#fff,61.6vw 29.7vh 0 -0.13rem#fff,65vw 23.2vh 0 -0.04rem#fff,81.6vw 32.7vh 0 -0.23rem#fff,94vw 53.8vh 0 -0.18rem#fff,96.1vw 63.5vh 0 -0.19rem#fff,78.5vw 35vh 0 -0.29rem#fff,73.8vw 44.9vh 0 -0.37rem#fff,48vw 15.6vh 0 -0.06rem#fff,95.6vw 6.3vh 0 -0.21rem#fff,62vw 74.5vh 0 -0.36rem#fff,41.2vw 83.3vh 0 -0.23rem#fff,78.5vw 26vh 0 -0.26rem#fff,72.3vw 64.3vh 0 -0.32rem#fff,8.3vw 82vh 0 -0.01rem#fff,97.1vw 61.1vh 0 -0.49rem#fff,68.7vw 55.8vh 0 -0.42rem#fff,9.3vw 68.5vh 0 -0.18rem#fff,10.4vw 95.1vh 0 -0.21rem#fff,46.3vw 32.9vh 0 -0.42rem#fff,95.4vw 84.6vh 0 -0.43rem#fff,48.5vw 5.7vh 0 -0.5rem#fff,30.6vw 43.3vh 0 -0.36rem#fff,15.4vw 9.3vh 0 -0.49rem#fff,85.6vw 93.6vh 0 -0.3rem#fff,49.7vw 34.6vh 0 -0.2rem#fff,63.8vw 55.1vh 0 -0.45rem#fff,6.6vw 66.2vh 0 -0.22rem#fff,43.6vw 85vh 0 -0.16rem#fff,26vw 84.4vh 0 -0.23rem#fff,78.5vw 47.9vh 0 -0.32rem#fff,75.5vw 49vh 0 -0.24rem#fff,13.2vw 33vh 0 -0.47rem#fff,41.8vw 62.4vh 0 -0.21rem#fff,64.5vw 74.4vh 0 -0.33rem#fff,74.8vw 41.8vh 0 -0.09rem#fff,2.2vw 98.9vh 0 -0.31rem#fff,63.5vw 25.1vh 0 -0.28rem#fff,35.2vw 80.6vh 0 -0.21rem#fff,28vw 1.6vh 0 -0.15rem#fff,5vw 98.1vh 0 -0.48rem#fff,26.7vw 50.4vh 0 -0.27rem#fff,80.4vw 96.7vh 0 -0.41rem#fff,13.3vw 21.1vh 0 -0.29rem#fff,13.9vw 95vh 0 -0.12rem#fff,63.3vw 72.8vh 0 -0.02rem#fff,41.6vw 48.7vh 0 -0.5rem#fff,31.5vw 61vh 0 -0.23rem#fff,85.9vw 23.9vh 0 -0.18rem#fff,81.2vw 99.2vh 0 -0.03rem#fff,35.9vw 52vh 0 -0.16rem#fff,47.7vw 71.5vh 0 -0.16rem#fff,20.4vw 8.3vh 0 -0.42rem#fff,24.3vw 29.9vh 0 -0.49rem#fff,8.7vw 23.8vh 0 -0.2rem#fff,15.1vw 28.9vh 0 -0.25rem#fff,35.2vw 62.3vh 0 -0.11rem#fff,64.6vw 37.5vh 0 -0.11rem#fff,22.5vw 81.3vh 0 -0.26rem#fff,45.2vw 93.9vh 0 -0.5rem#fff,91vw 61.7vh 0 -0.47rem#fff,98.1vw 69.6vh 0 -0.44rem#fff,4vw 22.3vh 0 -0.35rem#fff,27.4vw 54.1vh 0 -0.24rem#fff,46.2vw 27.2vh 0 -0.17rem#fff,21.3vw 99.6vh 0 -0.12rem#fff,14.6vw 46.9vh 0 -0.19rem#fff,9.2vw 9.3vh 0 -0.47rem#fff,47.2vw 71.3vh 0 -0.17rem#fff,20.1vw 85.9vh 0 -0.12rem#fff,23.3vw 5.4vh 0 -0.39rem#fff,24.4vw 36.6vh 0 -0.16rem#fff,83.3vw 78.4vh 0 -0.06rem#fff,39.4vw 52.6vh 0 -0.34rem#fff,34.7vw 41.5vh 0 -0.42rem#fff,69.8vw 53.5vh 0 -0.38rem#fff,95.8vw 20.2vh 0 -0.26rem#fff,64.8vw 0.8vh 0 -0.34rem#fff,29vw 6.3vh 0 -0.12rem#fff,97.5vw 38.3vh 0 -0.43rem#fff,97.9vw 51.3vh 0 -0.1rem#fff,13.1vw 20.5vh 0 -0.23rem#fff,50.3vw 60.9vh 0 -0.35rem#fff,93.1vw 92.2vh 0 -0.2rem#fff,39.9vw 17.6vh 0 -0.37rem#fff,72.7vw 33.5vh 0 -0.21rem#fff,73.1vw 81.9vh 0 -0.25rem#fff,50.5vw 61.3vh 0 -0.29rem#fff,92.1vw 82.3vh 0 -0.39rem#fff,73.6vw 13.1vh 0 -0.48rem#fff,63vw 5.6vh 0 -0.27rem#fff,88vw 60.5vh 0 -0.12rem#fff,65.6vw 2.7vh 0 -0.29rem#fff,94.2vw 16.4vh 0 -0.46rem#fff,94.5vw 90.7vh 0 -0.28rem#fff,96.3vw 26.8vh 0 -0.39rem#fff,27.6vw 68.8vh 0 -0.43rem#fff,12.6vw 98.3vh 0 -0.19rem#fff,77.1vw 10.6vh 0 -0.3rem#fff,45.6vw 3.1vh 0 -0.08rem#fff,91.6vw 65.6vh 0 -0.25rem#fff,49.7vw 46.4vh 0 -0.2rem#fff,99.6vw 73.3vh 0 -0.18rem#fff,83.6vw 41vh 0 -0.24rem#fff,73.8vw 74.8vh 0 -0.01rem#fff,25.7vw 98.8vh 0 -0.21rem#fff,1.3vw 19vh 0 -0.09rem#fff,78.3vw 15vh 0 -0.35rem#fff,99.3vw 34.6vh 0 -0.41rem#fff,22.3vw 94.2vh 0 -0.47rem#fff,70.5vw 68.9vh 0 -0.09rem#fff,10.7vw 41.6vh 0 -0.43rem#fff,88.2vw 91.3vh 0 -0.49rem#fff,21.9vw 12.5vh 0 -0.17rem#fff,40.7vw 41.6vh 0 -0.31rem#fff,79vw 38.9vh 0 -0.49rem#fff,55.7vw 89.7vh 0 -0.15rem#fff,59.8vw 38.7vh 0 -0.33rem#fff,90.2vw 97.3vh 0 -0.25rem#fff,16.9vw 99.4vh 0 -0.4rem#fff,56.9vw 19.5vh 0 -0.22rem#fff,91.8vw 53.3vh 0 -0.07rem#fff,48vw 81.6vh 0 -0.31rem#fff,53.5vw 80.2vh 0 -0.2rem#fff,44.2vw 88.8vh 0 -0.39rem#fff,85.3vw 61.7vh 0 -0.34rem#fff,76.4vw 3.5vh 0 -0.24rem#fff,20.7vw 11.6vh 0 -0.08rem#fff,40.2vw 12.2vh 0 -0.32rem#fff,14.2vw 50.2vh 0 -0.18rem#fff,54vw 85.6vh 0 -0.42rem#fff,12.2vw 91.3vh 0 -0.14rem#fff,49.9vw 10.2vh 0 -0.05rem#fff,100vw 66.3vh 0 -0.06rem#fff,68.6vw 69.7vh 0 -0.48rem#fff,49.4vw 48.3vh 0 -0.22rem#fff,73.1vw 78vh 0 -0.31rem#fff,87.5vw 50.4vh 0 -0.08rem#fff,68.6vw 53.6vh 0 -0.01rem#fff,80.5vw 60.3vh 0 -0.11rem#fff,17.8vw 94.8vh 0 -0.33rem#fff,37.5vw 32.8vh 0 -0.06rem#fff,15vw 67.8vh 0 -0.03rem#fff,56.1vw 24vh 0 -0.05rem#fff,45.7vw 4.6vh 0 -0.27rem#fff,71.5vw 51.6vh 0 -0.19rem#fff,30.5vw 82.6vh 0 -0.22rem#fff,29.5vw 10.4vh 0 -0.26rem#fff,83.7vw 50.5vh 0 -0.12rem#fff,41.5vw 67.7vh 0 -0.47rem#fff,37.7vw 88.5vh 0 -0.26rem#fff,5.2vw 30.1vh 0 -0.26rem#fff,15.6vw 66vh 0 -0.4rem#fff,78.9vw 46.3vh 0 -0.3rem#fff,46.8vw 10.5vh 0 -0.12rem#fff,34.3vw 36.6vh 0 -0.08rem#fff,12.8vw 23.6vh 0 -0.08rem#fff,70.5vw 35.2vh 0 -0.38rem#fff,61.2vw 65vh 0 -0.01rem#fff,6.4vw 96.1vh 0 -0.02rem#fff,79.6vw 59.9vh 0 -0.11rem#fff,5.9vw 21.3vh 0 -0.4rem#fff,41.9vw 98.3vh 0 -0.26rem#fff,84.7vw 83.3vh 0 -0.05rem#fff,42.6vw 28.2vh 0 -0.13rem#fff,29.1vw 36.1vh 0 -0.11rem#fff,28.4vw 18.8vh 0 -0.04rem#fff,66.5vw 13.8vh 0 -0.08rem#fff,51.3vw 39.4vh 0 -0.32rem#fff,68.6vw 85.8vh 0 -0.16rem#fff,87.8vw 0.2vh 0 -0.45rem#fff,10.3vw 15.1vh 0 -0.14rem#fff,44.8vw 12.1vh 0 -0.07rem#fff,61.9vw 12.3vh 0 -0.15rem#fff,52.6vw 96.7vh 0 -0.05rem#fff,60.9vw 51vh 0 -0.34rem#fff,16.5vw 98.7vh 0 -0.24rem#fff,59.9vw 88.8vh 0 -0.16rem#fff,69.3vw 24.2vh 0 -0.11rem#fff,46.7vw 58.8vh 0 -0.43rem#fff,60.7vw 61.3vh 0 -0.07rem#fff,30.4vw 5.2vh 0 -0.25rem#fff,57.2vw 26.3vh 0 -0.02rem#fff,73.9vw 37.8vh 0 -0.44rem#fff,49vw 27.3vh 0 -0.5rem#fff,42.3vw 62.1vh 0 -0.25rem#fff,64.9vw 95.9vh 0 -0.47rem#fff,2vw 20vh 0 -0.36rem#fff,79vw 61vh 0 -0.1rem#fff,47.3vw 60.5vh 0 -0.36rem#fff,19.7vw 27.9vh 0 -0.06rem#fff,6.7vw 14.8vh 0 -0.08rem#fff,11.2vw 71vh 0 -0.13rem#fff,32.8vw 6.2vh 0 -0.2rem#fff,29.7vw 41.4vh 0 -0.11rem#fff,73.1vw 28.2vh 0 -0.48rem#fff,36.9vw 72.7vh 0 -0.32rem#fff,49.9vw 42.7vh 0 -0.16rem#fff,50.1vw 2.9vh 0 -0.44rem#fff,76vw 42.6vh 0 -0.46rem#fff,12vw 23.6vh 0 -0.5rem#fff,81vw 5.7vh 0 -0.24rem#fff,50.8vw 53.7vh 0 -0.34rem#fff,97.6vw 9.3vh 0 -0.1rem#fff,19vw 89.7vh 0 -0.24rem#fff,78.3vw 21.7vh 0 -0.45rem#fff,0.4vw 3.7vh 0 -0.18rem#fff,22.7vw 7vh 0 -0.11rem#fff,37.9vw 11.7vh 0 -0.01rem#fff,25.1vw 5.7vh 0 -0.38rem#fff,75.8vw 42.6vh 0 -0.14rem#fff,83.4vw 40.3vh 0 -0.12rem#fff,56.2vw 41.3vh 0 -0.04rem#fff,26.4vw 82.3vh 0 -0.29rem#fff,62.5vw 2.8vh 0 -0.19rem#fff,81.9vw 15.7vh 0 -0.07rem#fff,47.5vw 72.9vh 0 -0.43rem#fff,58.4vw 48.2vh 0 -0.09rem#fff,36.4vw 55.7vh 0 -0.12rem#fff,63.5vw 34.1vh 0 -0.24rem#fff,76.8vw 29.3vh 0 -0.01rem#fff,92.8vw 64.3vh 0 -0.49rem#fff,29vw 65.3vh 0 -0.19rem#fff,60.4vw 34.4vh 0 -0.48rem#fff,48.7vw 99.9vh 0 -0.36rem#fff,71.6vw 60.4vh 0 -0.04rem#fff,70.6vw 86.9vh 0 -0.08rem#fff,75.6vw 24.9vh 0 -0.21rem#fff,2.6vw 74vh 0 -0.47rem#fff,99.3vw 22.9vh 0 -0.2rem#fff,84.2vw 48.6vh 0 -0.3rem#fff,23.8vw 22.3vh 0 -0.37rem#fff,20.1vw 22.4vh 0 -0.11rem#fff,60.8vw 13.1vh 0 -0.17rem#fff,63.2vw 60.2vh 0 -0.31rem#fff,37.2vw 53.7vh 0 -0.26rem#fff;
            animation-duration: 16s;
            }

            .layer2.a {
            animation-delay: -8s;
            }

            .layer3 {
            width: 0.8rem;
            height: 0.8rem;
            filter: blur(6px);
            box-shadow: 9.3vw 56.9vh 0 -0.1rem#fff,94.8vw 2.3vh 0 -0.46rem#fff,55.1vw 1.4vh 0 -0.23rem#fff,54.7vw 9vh 0 -0.32rem#fff,67.9vw 38.3vh 0 -0.12rem#fff,88.7vw 65.6vh 0 -0.36rem#fff,60.7vw 20.1vh 0 -0.45rem#fff,79.9vw 42.7vh 0 -0.08rem#fff,75.1vw 24.8vh 0 -0.04rem#fff,18.7vw 65.8vh 0 -0.19rem#fff,74.4vw 82vh 0 -0.05rem#fff,93.6vw 92vh 0 -0.05rem#fff,62.5vw 46.6vh 0 -0.24rem#fff,70.9vw 30.9vh 0 -0.09rem#fff,14.1vw 8.7vh 0 -0.1rem#fff,0.1vw 56vh 0 -0.4rem#fff,49.7vw 78.9vh 0 -0.09rem#fff,75.3vw 79.3vh 0 -0.27rem#fff,83.9vw 74.3vh 0 -0.19rem#fff,84.1vw 78.9vh 0 -0.05rem#fff,93.2vw 15.6vh 0 -0.11rem#fff,11.4vw 74.7vh 0 -0.09rem#fff,59.3vw 41vh 0 -0.46rem#fff,44.6vw 66.7vh 0 -0.46rem#fff,90.1vw 33.7vh 0 -0.03rem#fff,45vw 83.4vh 0 -0.28rem#fff,40.4vw 94.4vh 0 -0.04rem#fff,91.9vw 45.5vh 0 -0.18rem#fff,69.8vw 40.7vh 0 -0.49rem#fff,10.2vw 57vh 0 -0.35rem#fff,88.6vw 27.1vh 0 -0.05rem#fff,99.1vw 39.2vh 0 -0.35rem#fff,5.3vw 85.9vh 0 -0.5rem#fff,84.5vw 88.2vh 0 -0.08rem#fff,29.1vw 50.4vh 0 -0.47rem#fff,20.1vw 60.1vh 0 -0.29rem#fff,74.3vw 39.3vh 0 -0.3rem#fff,99.2vw 52.7vh 0 -0.17rem#fff,80.1vw 93.7vh 0 -0.02rem#fff,29.7vw 23vh 0 -0.46rem#fff,68.1vw 0.9vh 0 -0.11rem#fff,38.6vw 38.7vh 0 -0.45rem#fff,21.9vw 10.4vh 0 -0.3rem#fff,20vw 16.9vh 0 -0.02rem#fff,10.4vw 61.2vh 0 -0.06rem#fff,71vw 70.1vh 0 -0.44rem#fff,77.2vw 97.3vh 0 -0.3rem#fff,57.9vw 84.2vh 0 -0.13rem#fff,97.1vw 89.3vh 0 -0.2rem#fff,17vw 59.6vh 0 -0.14rem#fff,20vw 52.8vh 0 -0.25rem#fff,23.1vw 49vh 0 -0.23rem#fff,2.4vw 68.7vh 0 -0.07rem#fff,95.9vw 55.2vh 0 -0.25rem#fff,9.8vw 42.1vh 0 -0.22rem#fff,13.6vw 96.9vh 0 -0.45rem#fff,18.3vw 31.7vh 0 -0.44rem#fff,85.3vw 22.4vh 0 -0.1rem#fff,35.4vw 90vh 0 -0.45rem#fff,37.8vw 20.3vh 0 -0.24rem#fff,26.1vw 67.5vh 0 -0.24rem#fff,99vw 48.7vh 0 -0.08rem#fff,43vw 63.6vh 0 -0.33rem#fff,61.2vw 96vh 0 -0.23rem#fff,26.9vw 17.9vh 0 -0.05rem#fff,2.3vw 73vh 0 -0.15rem#fff,27.1vw 83.3vh 0 -0.21rem#fff,53.6vw 90.1vh 0 -0.25rem#fff,3.3vw 18.9vh 0 -0.08rem#fff,36.6vw 37.2vh 0 -0.24rem#fff,95.1vw 33.5vh 0 -0.21rem#fff,51.1vw 84vh 0 -0.46rem#fff,36.5vw 3.4vh 0 -0.04rem#fff,44.4vw 35.3vh 0 -0.36rem#fff,28.4vw 72.5vh 0 -0.22rem#fff,15.5vw 6.1vh 0 -0.06rem#fff,81.9vw 5.9vh 0 -0.47rem#fff,0.1vw 95.5vh 0 -0.42rem#fff,81.3vw 7.1vh 0 -0.27rem#fff,12.8vw 88.8vh 0 -0.39rem#fff,74.4vw 17.3vh 0 -0.21rem#fff,52.4vw 19.9vh 0 -0.24rem#fff,11.5vw 84vh 0 -0.17rem#fff,52.2vw 24vh 0 -0.09rem#fff,86.5vw 62.8vh 0 -0.43rem#fff,14.8vw 54.8vh 0 -0.37rem#fff,18.2vw 17.3vh 0 -0.04rem#fff,40.9vw 85.1vh 0 -0.02rem#fff,93.5vw 41.6vh 0 -0.29rem#fff,5.3vw 13.7vh 0 -0.37rem#fff,27.7vw 8.7vh 0 -0.41rem#fff,96.2vw 17.2vh 0 -0.22rem#fff,57.5vw 75vh 0 -0.41rem#fff,73.3vw 16.3vh 0 -0.17rem#fff,70.7vw 38.3vh 0 -0.02rem#fff,25.7vw 31.3vh 0 -0.12rem#fff,21.8vw 70.8vh 0 -0.02rem#fff,57vw 42vh 0 -0.42rem#fff,98vw 93.6vh 0 -0.21rem#fff,21.3vw 87vh 0 -0.35rem#fff,92vw 38.5vh 0 -0.43rem#fff,88.8vw 87.8vh 0 -0.31rem#fff,65.8vw 20.2vh 0 -0.38rem#fff,1.2vw 49.3vh 0 -0.2rem#fff,38.2vw 55.8vh 0 -0.4rem#fff,96.2vw 45.4vh 0 -0.41rem#fff,64.1vw 14.5vh 0 -0.03rem#fff,70.9vw 73.7vh 0 -0.11rem#fff,74.1vw 36.8vh 0 -0.3rem#fff,72.3vw 25.4vh 0 -0.17rem#fff,44.2vw 22.8vh 0 -0.32rem#fff,40.2vw 9.7vh 0 -0.36rem#fff,63.4vw 99.2vh 0 -0.22rem#fff,12.5vw 75.1vh 0 -0.4rem#fff,3.9vw 6.2vh 0 -0.17rem#fff,36.5vw 42.2vh 0 -0.39rem#fff,0.1vw 85.6vh 0 -0.4rem#fff,40.6vw 4.5vh 0 -0.43rem#fff,61.2vw 86.2vh 0 -0.08rem#fff,68.8vw 2.4vh 0 -0.28rem#fff,62.9vw 59.3vh 0 -0.12rem#fff,16.7vw 60.1vh 0 -0.19rem#fff,72.6vw 40vh 0 -0.26rem#fff,14.8vw 17.2vh 0 -0.32rem#fff,44.6vw 51.3vh 0 -0.47rem#fff,22.5vw 84.1vh 0 -0.15rem#fff,97.6vw 31.6vh 0 -0.15rem#fff,65.1vw 10.9vh 0 -0.09rem#fff,82.6vw 35.6vh 0 -0.18rem#fff,3.8vw 20.9vh 0 -0.35rem#fff,60.1vw 44.4vh 0 -0.13rem#fff,84.8vw 9.9vh 0 -0.35rem#fff,98.4vw 55.9vh 0 -0.44rem#fff,38vw 50vh 0 -0.02rem#fff,9.5vw 21.5vh 0 -0.4rem#fff,29.2vw 81.7vh 0 -0.13rem#fff,49.2vw 85.9vh 0 -0.05rem#fff,35.9vw 62.9vh 0 -0.18rem#fff,56.1vw 72.6vh 0 -0.38rem#fff,80.4vw 2.7vh 0 -0.32rem#fff,31.2vw 50.5vh 0 -0.45rem#fff,36.3vw 93.7vh 0 -0.47rem#fff,85.9vw 35.8vh 0 -0.45rem#fff,64.3vw 73.5vh 0 -0.32rem#fff,17.1vw 48.8vh 0 -0.02rem#fff,21.3vw 83.9vh 0 -0.36rem#fff,44.6vw 19vh 0 -0.17rem#fff,72vw 1.5vh 0 -0.01rem#fff,5.9vw 94vh 0 -0.42rem#fff,78.5vw 28.9vh 0 -0.02rem#fff,11.5vw 25.9vh 0 -0.26rem#fff,15.3vw 38.1vh 0 -0.33rem#fff,92.6vw 51vh 0 -0.18rem#fff,80.8vw 55.5vh 0 -0.23rem#fff,59.3vw 39.4vh 0 -0.08rem#fff,25.9vw 6.5vh 0 -0.39rem#fff,6.3vw 56vh 0 -0.11rem#fff,20.3vw 24.9vh 0 -0.01rem#fff,96.8vw 16.1vh 0 -0.27rem#fff,57.4vw 58.2vh 0 -0.39rem#fff,33.7vw 87.3vh 0 -0.08rem#fff,67.9vw 63.7vh 0 -0.16rem#fff,37.2vw 98vh 0 -0.36rem#fff,34.1vw 53.2vh 0 -0.19rem#fff,81.4vw 2.2vh 0 -0.34rem#fff,14.4vw 58.3vh 0 -0.34rem#fff,49.5vw 68.3vh 0 -0.37rem#fff,90.1vw 11.3vh 0 -0.05rem#fff,42.4vw 48vh 0 -0.08rem#fff,3.3vw 24vh 0 -0.06rem#fff,39.2vw 61.4vh 0 -0.38rem#fff,10.6vw 74.3vh 0 -0.42rem#fff,62.3vw 34.3vh 0 -0.02rem#fff,90.3vw 11.6vh 0 -0.16rem#fff,14.7vw 12.4vh 0 -0.22rem#fff,88.2vw 95vh 0 -0.45rem#fff,1.4vw 84vh 0 -0.03rem#fff,3.4vw 30vh 0 -0.41rem#fff,2.6vw 40.8vh 0 -0.39rem#fff,27.3vw 32.8vh 0 -0.1rem#fff,30.9vw 9.1vh 0 -0.13rem#fff,86.4vw 19vh 0 -0.22rem#fff,40.9vw 44.1vh 0 -0.43rem#fff,72.6vw 47.6vh 0 -0.23rem#fff,8.7vw 96.4vh 0 -0.04rem#fff,30vw 37.3vh 0 -0.08rem#fff,36.9vw 24.7vh 0 -0.49rem#fff,73.8vw 36.5vh 0 -0.26rem#fff,46.6vw 47vh 0 -0.36rem#fff,44.3vw 19.3vh 0 -0.04rem#fff,50vw 98.1vh 0 -0.21rem#fff,17.4vw 45.9vh 0 -0.24rem#fff,43.7vw 1.1vh 0 -0.22rem#fff,20.4vw 61.4vh 0 -0.45rem#fff,65.8vw 83.9vh 0 -0.08rem#fff,59.2vw 89.3vh 0 -0.32rem#fff,76.5vw 98.3vh 0 -0.23rem#fff,8.1vw 68.3vh 0 -0.3rem#fff,18vw 47.7vh 0 -0.35rem#fff,28.5vw 19vh 0 -0.27rem#fff,40vw 79.9vh 0 -0.3rem#fff,29.3vw 33.3vh 0 -0.37rem#fff,25.4vw 90vh 0 -0.3rem#fff,74.8vw 84.9vh 0 -0.09rem#fff,53.9vw 66.1vh 0 -0.35rem#fff,16.4vw 17vh 0 -0.45rem#fff,28.1vw 57.9vh 0 -0.3rem#fff,44.2vw 83.5vh 0 -0.27rem#fff,91vw 50.4vh 0 -0.04rem#fff,75.6vw 2.7vh 0 -0.48rem#fff,42vw 98.2vh 0 -0.14rem#fff,74.8vw 16.6vh 0 -0.12rem#fff,99.6vw 73.8vh 0 -0.21rem#fff,69.2vw 91.8vh 0 -0.37rem#fff,92vw 27vh 0 -0.27rem#fff,71.1vw 57.2vh 0 -0.45rem#fff,67.2vw 97.6vh 0 -0.36rem#fff,12.2vw 62vh 0 -0.21rem#fff,4.8vw 79.4vh 0 -0.31rem#fff,77.6vw 64.4vh 0 -0.37rem#fff,57.3vw 60.9vh 0 -0.42rem#fff,33.5vw 27.4vh 0 -0.18rem#fff,20.5vw 97.5vh 0 -0.09rem#fff,60.3vw 6.3vh 0 -0.36rem#fff,77.9vw 95.4vh 0 -0.05rem#fff,73.2vw 23.4vh 0 -0.3rem#fff,96vw 89.3vh 0 -0.41rem#fff,3.2vw 19.1vh 0 -0.03rem#fff,41.3vw 93.3vh 0 -0.38rem#fff,82.8vw 37.5vh 0 -0.13rem#fff,87.2vw 67vh 0 -0.11rem#fff,32.4vw 63.6vh 0 -0.4rem#fff,43.2vw 78.7vh 0 -0.2rem#fff,27.9vw 33.5vh 0 -0.23rem#fff,99vw 82.8vh 0 -0.34rem#fff,80.2vw 56vh 0 -0.24rem#fff,58vw 71vh 0 -0.38rem#fff,90vw 33.1vh 0 -0.27rem#fff,63.8vw 59.1vh 0 -0.22rem#fff,12.9vw 71.5vh 0 -0.25rem#fff,38.5vw 1vh 0 -0.46rem#fff,98vw 73vh 0 -0.37rem#fff,75.6vw 10.5vh 0 -0.12rem#fff,66.9vw 91.3vh 0 -0.16rem#fff,6.3vw 35.6vh 0 -0.03rem#fff,16.1vw 87.3vh 0 -0.3rem#fff,59vw 33.9vh 0 -0.2rem#fff,24.8vw 45.6vh 0 -0.23rem#fff,67.4vw 89vh 0 -0.4rem#fff,81.5vw 33.2vh 0 -0.04rem#fff,60.3vw 95.4vh 0 -0.5rem#fff,51.2vw 18.8vh 0 -0.24rem#fff,97vw 44.2vh 0 -0.18rem#fff,42.9vw 38.7vh 0 -0.17rem#fff,74.9vw 4.6vh 0 -0.37rem#fff,9.1vw 23.5vh 0 -0.21rem#fff,82.9vw 84.9vh 0 -0.21rem#fff,53.6vw 20.6vh 0 -0.42rem#fff,17.5vw 2.7vh 0 -0.03rem#fff,22.6vw 46.5vh 0 -0.41rem#fff,6.2vw 68.8vh 0 -0.29rem#fff,66.5vw 76.9vh 0 -0.41rem#fff,32.2vw 93.3vh 0 -0.28rem#fff,64.2vw 77.7vh 0 -0.4rem#fff,77.6vw 50.5vh 0 -0.38rem#fff,2vw 77.5vh 0 -0.28rem#fff,70.5vw 85.1vh 0 -0.16rem#fff,48vw 43.1vh 0 -0.07rem#fff,90vw 11.4vh 0 -0.07rem#fff,11.7vw 39vh 0 -0.46rem#fff,2.9vw 89.4vh 0 -0.15rem#fff,68.8vw 36.3vh 0 -0.23rem#fff,73.1vw 43.1vh 0 -0.3rem#fff,45.5vw 70.3vh 0 -0.33rem#fff,4.3vw 42.4vh 0 -0.43rem#fff,44.9vw 23.7vh 0 -0.14rem#fff,83.2vw 11vh 0 -0.5rem#fff,58.7vw 0.7vh 0 -0.33rem#fff,94.3vw 11.8vh 0 -0.41rem#fff,0.2vw 55.9vh 0 -0.33rem#fff,14.2vw 55.9vh 0 -0.34rem#fff,51vw 95.2vh 0 -0.11rem#fff,28.8vw 7vh 0 -0.11rem#fff,81.8vw 54.6vh 0 -0.05rem#fff,92vw 36.6vh 0 -0.36rem#fff,33.4vw 47.1vh 0 -0.07rem#fff,69.1vw 24.8vh 0 -0.4rem#fff,49.8vw 76.7vh 0 -0.48rem#fff,31.6vw 78.2vh 0 -0.17rem#fff,91.6vw 73vh 0 -0.02rem#fff,46.4vw 97.6vh 0 -0.35rem#fff,76.4vw 26vh 0 -0.47rem#fff,64vw 9.9vh 0 -0.25rem#fff,92.2vw 14.2vh 0 -0.27rem#fff,38.6vw 1.4vh 0 -0.22rem#fff,80.5vw 41.3vh 0 -0.23rem#fff,26.3vw 68.4vh 0 -0.13rem#fff,57.3vw 40.9vh 0 -0.02rem#fff,10.7vw 47.7vh 0 -0.15rem#fff,22.6vw 64.1vh 0 -0.19rem#fff;
            animation-duration: 20s;
            }

            .layer3.a {
            animation-delay: -10s;
            }

            @keyframes fall {
            100% {
                transform: translateY(200vh);
            }
            }
            @media (prefers-reduced-motion) {
             .snow {
                animation-name: noop;
             }
            }

    </style>
</head>
<body>
<div class="absolute wrapper">
     <div class="snow layer1 a"></div>
     <div class="snow layer1"></div>
     <div class="snow layer2 a"></div>
     <div class="snow layer2"></div>
     <div class="snow layer3 a"></div>
     <div class="snow layer3"></div>
</div>
<div class="relative min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0">
    <div class="text-center w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
        <x-button-primary href="{{ route('register') }}">Get Started</x-button-primary>
        <x-button-secondary href="{{ route('login') }}">Login</x-button-secondary>
    </div>
</div>
</div>
</body>
</html>

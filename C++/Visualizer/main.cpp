#include <SDL2/SDL.h>
#include <iostream>
#include <random>
#include <ranges>
#include <algorithm>

void draw_state(
    std::vector<int>& v,  // passing in all the elements we want to sort into v / vector
    SDL_Renderer* renderer, // rendering out what is going on
    unsigned int red,  //sorting line - red line
    unsigned int blue  // scanning for unsorted - blue line
) // end void_drawstate

{
        unsigned int index = 0;
        for(int i : v) {  // we want every element in v
            if(index == red) // if index is red
                SDL_SetRenderDrawColor(renderer, 255,0,0,255);  // color it red
            else if(index == blue)  // if index is blue
                SDL_SetRenderDrawColor(renderer, 0,0,255,255);  // color it blue
            else // if it's neither red or blue
                SDL_SetRenderDrawColor(renderer, 255,255,255,255);  // color it white
            SDL_RenderDrawLine(renderer,index, 99, index, i)  // drawing a line depending on the size of
            index += 1;  // sorting each by an increment of 1
        }
}

int main() {

    std::random_device rd;   // create a random number
    std::uniform_int_distribution d(1,99);
    std::vector<int> v;

    //populate vector with random numbers

    for(int i = 0; i < 100; i++) {

        v.push_back(d(rd));  // pushing back random numbers

    }

    SDL_Window* window = nullptr;
    SDL_Renderer* renderer = nullptr;
    SDL_CreateWindowAndRenderer(  // populate the window and renderer
        100*10, 100*10, 0,
        &window, &renderer);
    SDL_RenderSetScale(renderer,10,10);
    )

    // sort algorithm

    for(unsigned int i = 0; i < v.size(); i++) {

        for(unsigned int j = i; j < v.size(); j++) {
            if(v[j] < v[i]) {
                std::swap(v[j],v[i]);
            }
            // we are going to clear the screen

            SDL_SetRenderDrawColor(renderer,0,0,0,255);
            SDL_RenderClear(renderer);

            // Draw the state of the sort

            draw_state(v,renderer,i,j);

            //show to window

            SDL_RenderPresent(renderer);
            SDL_Delay(10);
        }
    }
    for(int i : v) {
        std::cout << i << " ";
    }
    if(std::ranges::is_sorted(v)) {
        std::cout << "\nsorted\n";
    }



} //end of main()
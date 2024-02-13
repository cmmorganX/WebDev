#include <iostream>

int main() {
    int x = 10;   // integer X = 10
    int y = x++;  // integer y = 10 , integer x = 11
    int z = ++x;  // integer z = 11 , integer x = 11
    std::cout << x;
    return 0;
}
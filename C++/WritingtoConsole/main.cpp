#include <iostream>

int main() {  // initilizing the main function - power button on
    int x = 10;
    int y = 20;
    std::cout << "x = " << x << std::endl;   // << is like a comma and concacanates the line - endl = ending the line , much like <br>
    std::cout << "y = " << y;   // << = inserting something to our output stream
    return 0;
}

// two std::cout are not necessary
//all can be on one line as follows:

// int main() {
    // int x = 10;
    // int y = 20;
    // cout << "x = " << x << endl
        //  << "y = " << y;
//}
#include <iostream> // accessing the C++ library , input-output-stream

// take a mathematical expression and implement it in C++
// z = x + 10
//     _____
//       3y

int main() {  // main function starts our work , () is our parameters
    double x = 10;  // double = data type that accommodates 15 - 16 digits , float = 7 digits
    double y = 5;
    double z = (x + 10) / (3 * y);  // paranthesis need to be used to separate the numerator and denominator
    std::cout << z;   // "standard" , ":: = choose feature" , "character out"
                        //prints the answer
    return 0;       
}
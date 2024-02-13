#include <iostream> // understanding heirarchy in math expressions

int main() {
// () will dictate heirarchy
// * and /  -- processed first = high heirarchy
// + and -  -- processed next = low heirarchy
// if you put () around "1+2" , it will process first
    double x = 1 + 2 * 3;  // 2*3 processed first = 6 , plus 1 = 7
    std::cout << x;
    return 0;
}
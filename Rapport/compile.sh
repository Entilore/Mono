pdflatex -synctex=1 -interaction=nonstopmode main.tex
biber main
makeglossaries main
pdflatex -synctex=1 -interaction=nonstopmode main.tex
pdflatex -synctex=1 -interaction=nonstopmode main.tex



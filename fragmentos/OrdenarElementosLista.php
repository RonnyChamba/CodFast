<textarea name="codigo" id="codigo" cols="30" rows="10" readonly>    
   // Crear lista enteros
   List<Integer> enteros = Arrays.asList(16,89,3,56,10,87,160,46,23);

   // Ordenar elementos de forma natural(ascendente) : sorted()
   // Los elementos a ordenar deben implementar la interfaz Comparable
     enteros
           .stream()
           .sorted()
           .forEach( x-> System.out.println(x));
</textarea>
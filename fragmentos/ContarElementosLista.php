<textarea name="codigo" id="codigo" cols="30" rows="10" readonly>    
   // Crear lista enteros
   List<Integer> enteros = Arrays.asList(12,58,96,100,85,48,63,88);
   
   // Contar los elemento : count()
   long numeroElementos = enteros
                                 .stream()
                                 .count();
   // Mostrar numeroElementos
   System.out.println("Total elementos: " +  numeroElementos);
</textarea>